<?php

/* TopxiaWebBundle:Review:Widget/list.html.twig */
class __TwigTemplate_731e6fc5493805651a3112fa42b62030d81709901497306096d6108e9425d126 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("review/list");
        // line 2
        if (((isset($context["member"]) ? $context["member"] : null) && ((array_key_exists("canReview", $context)) ? (_twig_default_filter((isset($context["canReview"]) ? $context["canReview"] : null), 1)) : (1)))) {
            // line 3
            echo "  <div class=\"clearfix\">
    <button class=\"btn btn-primary btn-sm pull-right js-show-review-form\" ";
            // line 4
            if ( !(isset($context["userReview"]) ? $context["userReview"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新评价"), "html", null, true);
            echo "</button>
  </div>

  <form id=\"review-form\" method=\"post\" action=\"";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["reviewSaveUrl"]) ? $context["reviewSaveUrl"] : null), "html", null, true);
            echo "\" ";
            if ((isset($context["userReview"]) ? $context["userReview"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <div class=\"form-group controls\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请打分："), "html", null, true);
            echo " <span data-rating=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array()), 0)) : (0)), "html", null, true);
            echo "\" data-img-path=\"";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array()) . "/assets/img/raty"), "html", null, true);
            echo "\" class=\"rating-btn\"></span>
      <input type=\"hidden\" name=\"rating\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "rating", array()), 0)) : (0)), "html", null, true);
            echo "\">
    </div>

    <div class=\"form-group controls\">
      <textarea class=\"form-control\" rows=\"8\" data-display=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价详细内容"), "html", null, true);
            echo "\" name=\"content\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userReview"]) ? $context["userReview"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
    </div>

    <div class=\"form-group clearfix\">
      <span class=\"text-success pull-left\" style=\"display: none;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价已保存！"), "html", null, true);
            echo "</span>
      <a href=\"javascript:;\" class=\"btn btn-primary pull-right js-btn-save\" data-loading-text=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在保存"), "html", null, true);
            echo "...\" autocomplete=\"off\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</a>
      <a href=\"javascript:;\" class=\"btn btn-link pull-right js-hide-review-form\" ";
            // line 20
            if ((isset($context["userReview"]) ? $context["userReview"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</a>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  </form>
";
        }
        // line 26
        echo "
";
        // line 27
        $context["canAccess"] = ((array_key_exists("canAccess", $context)) ? (_twig_default_filter((isset($context["canAccess"]) ? $context["canAccess"] : null), false)) : (false));
        // line 28
        echo "
";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if ((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), false)) : (false))) {
                // line 30
                echo "  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array");
                // line 31
                echo "  ";
                $context["posts"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("ReviewPosts", array("reviewId" => $this->getAttribute($context["review"], "id", array()), "targetType" => ((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "course")) : ("course")), "start" => 0, "limit" => 5)), null);
                // line 32
                echo "
  <div class=\"js-reviews\">
    <div class=\"media media-evaluate\">
      <div class=\"media-left\">
        ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
                echo "
      </div>
      <div class=\"media-body thread-post\">
        <div class=\"title\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
                echo " 
          ";
                // line 40
                if ($this->getAttribute($context["review"], "meta", array())) {
                    echo "<span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程完成进度"), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "learnedNum", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "lessonNum", array()), "html", null, true);
                    echo "</span>";
                }
                echo "&nbsp;&nbsp;
          ";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-m-d"), "html", null, true);
                echo " 
        </div>
        <div class=\"score\">
          ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "star", array(0 => $this->getAttribute($context["review"], "rating", array())), "method"), "html", null, true);
                echo "
        </div>
        <div class=\"content\">
          <div class=\"short-content\">";
                // line 47
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["review"], "content", array()), 100);
                echo "
            ";
                // line 48
                if ($this->getAttribute($context["review"], "updatedTime", array())) {
                    echo "<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("追评"), "html", null, true);
                    echo "</span>";
                }
                // line 49
                echo "          </div>
          <div class=\"full-content\" style=\"display:none;\">";
                // line 50
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
                echo "
            ";
                // line 51
                if ($this->getAttribute($context["review"], "updatedTime", array())) {
                    echo "<span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("追评"), "html", null, true);
                    echo "</span>";
                }
                // line 52
                echo "          </div>
        </div>
        <div class=\"actions clearfix\">
          <a href=\"javascript:;\" class=\"show-full-btn\" style=\"display:none;\">[";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开全文"), "html", null, true);
                echo "]</a>
          <a href=\"javascript:;\" class=\"show-short-btn\" style=\"display:none;\">[";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起全文"), "html", null, true);
                echo "]</a>
          ";
                // line 57
                if ((isset($context["canAccess"]) ? $context["canAccess"] : null)) {
                    // line 58
                    echo "            <a href=\"javascript:;\" class=\"js-reply pull-right\">";
                    if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
                    }
                    echo "</a>
          ";
                }
                // line 60
                echo "        </div>
        
        ";
                // line 62
                $context["goto"] = ((array_key_exists("goto", $context)) ? (_twig_default_filter((isset($context["goto"]) ? $context["goto"] : null), $this->env->getExtension('routing')->getPath("homepage"))) : ($this->env->getExtension('routing')->getPath("homepage")));
                // line 63
                echo "        ";
                if ((((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "course")) : ("course")) == "classroom")) {
                    // line 64
                    echo "          ";
                    $context["postReplyUrl"] = $this->env->getExtension('routing')->getPath("classroom_review_post", array("id" => $this->getAttribute($context["review"], "classroomId", array()), "reviewId" => $this->getAttribute($context["review"], "id", array())));
                    // line 65
                    echo "        ";
                } else {
                    // line 66
                    echo "          ";
                    $context["postReplyUrl"] = $this->env->getExtension('routing')->getPath("course_review_post", array("id" => $this->getAttribute($context["review"], "courseId", array()), "reviewId" => $this->getAttribute($context["review"], "id", array())));
                    // line 67
                    echo "        ";
                }
                // line 68
                echo "
        <div class=\"thread-subpost-container subcomments clearfix ";
                // line 69
                if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
                    echo "hide";
                }
                echo "\">
          <div class=\"thread-subpost-content\">
            ";
                // line 71
                $this->loadTemplate("TopxiaWebBundle:Review/Widget:subposts.html.twig", "TopxiaWebBundle:Review:Widget/list.html.twig", 71)->display(array_merge($context, array("posts" => (isset($context["posts"]) ? $context["posts"] : null), "targetType" => ((array_key_exists("targetType", $context)) ? (_twig_default_filter((isset($context["targetType"]) ? $context["targetType"] : null), "course")) : ("course")), "canAccess" => ((array_key_exists("canAccess", $context)) ? (_twig_default_filter((isset($context["canAccess"]) ? $context["canAccess"] : null), false)) : (false)))));
                // line 72
                echo "          </div>
          
          ";
                // line 74
                if ((isset($context["canAccess"]) ? $context["canAccess"] : null)) {
                    // line 75
                    echo "            <div class=\"thread-subpost-morebar clearfix ";
                    if (twig_test_empty((isset($context["posts"]) ? $context["posts"] : null))) {
                        echo "hide";
                    }
                    echo "\">
              <button class=\"btn btn-default btn-xs pull-right js-toggle-subpost-form\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
                    echo "</button>
            </div>
          ";
                }
                // line 79
                echo "
          ";
                // line 80
                if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
                    // line 81
                    echo "            <form method=\"post\" action=\"";
                    echo twig_escape_filter($this->env, (isset($context["postReplyUrl"]) ? $context["postReplyUrl"] : null), "html", null, true);
                    echo "\" class=\"thread-subpost-form ";
                    if ((isset($context["posts"]) ? $context["posts"] : null)) {
                        echo "hide";
                    }
                    echo "\">
              <div class=\"form-group\">
                <div class=\"controls\">
                  <textarea class=\"form-control\" name=\"content\" data-display=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("内容"), "html", null, true);
                    echo "\"></textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                    echo "\">
                <button type=\"submit\" data-loading-text=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在发表"), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm pull-right\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
                    echo "</button>
              </div>
            </form>
          ";
                } else {
                    // line 93
                    echo "            <div class=\"empty\">
              ";
                    // line 94
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
                // line 97
                echo "        </div>

      </div>
    </div>
  </div>

";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 104
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无评价"), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
";
        // line 107
        if (((array_key_exists("paginator", $context)) ? (_twig_default_filter((isset($context["paginator"]) ? $context["paginator"] : null), null)) : (null))) {
            // line 108
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Review:Widget/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 108,  343 => 107,  340 => 106,  331 => 104,  316 => 97,  300 => 94,  297 => 93,  288 => 89,  284 => 88,  277 => 84,  266 => 81,  264 => 80,  261 => 79,  255 => 76,  248 => 75,  246 => 74,  242 => 72,  240 => 71,  233 => 69,  230 => 68,  227 => 67,  224 => 66,  221 => 65,  218 => 64,  215 => 63,  213 => 62,  209 => 60,  199 => 58,  197 => 57,  193 => 56,  189 => 55,  184 => 52,  178 => 51,  174 => 50,  171 => 49,  165 => 48,  161 => 47,  155 => 44,  149 => 41,  137 => 40,  133 => 39,  127 => 36,  121 => 32,  118 => 31,  115 => 30,  103 => 29,  100 => 28,  98 => 27,  95 => 26,  89 => 23,  79 => 20,  73 => 19,  69 => 18,  60 => 14,  53 => 10,  45 => 9,  36 => 7,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
