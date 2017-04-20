<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_5ffdcbfb2a4271466eb2f35f44d9b00a7d7819cc1806fb7add48ad9fc27d1eb2 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:header.html.twig", 1);
        // line 2
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("course-manage/header"), "html", null, true);
        echo "
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\">
    ";
        // line 8
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) != "normal")) {
            // line 9
            echo "      [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("courseType"), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()), array(), "array"), "html", null, true);
            echo "]
    ";
        }
        // line 11
        echo "    <a class=\"link-dark\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 12
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "closed")) {
            // line 13
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "draft")) {
            // line 15
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 17
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 18
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 19
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 20
                echo "        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 26
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()), null)) : (null))) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("教师："), "html", null, true);
            echo "
      ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 29
                echo "        ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $context["id"], array(), "array");
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 36
        if ( !(isset($context["manage"]) ? $context["manage"] : null)) {
            // line 37
            echo "    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_review_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-role=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
            echo "\" data-placement=\"top\" href=\"#modal\">
        <i class=\"esicon esicon-like\"></i> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo "</a>
      ";
            // line 40
            if (((($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1) || ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "student")) : ("student")) == "teacher")) || (isset($context["isAdmin"]) ? $context["isAdmin"] : null))) {
                // line 41
                echo "        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_members", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看%user_name%的学习进度, 还可以发私信进行联系", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
                echo "!\" data-placement=\"bottom\"
          href=\"#modal\"><i class=\"esicon esicon-user\"></i> ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
                echo "</a>
      ";
            }
            // line 44
            echo "
      <div class=\"btn-group\" data-role=\"tooltip\" title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享到"), "html", null, true);
            echo "\" data-placement=\"left\" >
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <i class=\"esicon esicon-share\"></i>
        </button>
        ";
            // line 49
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:header.html.twig", 49)->display(array_merge($context, array("type" => "course", "right" => true)));
            // line 50
            echo "      </div>
      ";
            // line 51
            if ((isset($context["canExit"]) ? $context["canExit"] : null)) {
                // line 52
                echo "        ";
                if ((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "joinedType", array()) == "course") && $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()))) {
                    // line 53
                    echo "        <a class=\"btn btn-default btn-sm \" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
                    echo "\" type=\"button\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                } else {
                    // line 56
                    echo "        <a class=\"btn btn-default btn-sm course-exit-btn\" id=\"exit-course-learning\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("退出学习"), "html", null, true);
                    echo "\" type=\"button\"  href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\"  data-goto=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">
        <i class=\"esicon esicon-exit\"></i></a>
        ";
                }
                // line 59
                echo "      ";
            }
            // line 60
            echo "      ";
            if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
                // line 61
                echo "      <a class=\"btn btn-default btn-sm \" type=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"  title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
                echo "\"  >
      <i class=\"esicon esicon-setting\"></i>
      </a>
      ";
            }
            // line 65
            echo "    </div>

    ";
        } else {
            // line 68
            echo "
      ";
            // line 69
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
                // line 70
                echo "        <div class=\"btn-group\">
          <a class=\"btn btn-default btn-sm\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程主页"), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 74
            echo "
      <div class=\"btn-group\">
        <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
            echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu pull-right\">
          <li><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为 已购买用户"), "html", null, true);
            echo "</a></li>
          <li><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为 未购买用户"), "html", null, true);
            echo "</a></li>
        </ul>
      </div>

      ";
            // line 83
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
                // line 84
                echo "        <div class=\"btn-group\">
          <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布课程"), "html", null, true);
                echo "</button>
        </div>
      ";
            }
            // line 88
            echo "
    ";
        }
        // line 90
        echo "  </div>
</div>

";
        // line 93
        if ((((array_key_exists("vipChecked", $context)) ? (_twig_default_filter((isset($context["vipChecked"]) ? $context["vipChecked"] : null), "ok")) : ("ok")) != "ok")) {
            // line 94
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            // line 96
            if (((isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "not_member")) {
                // line 97
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                echo "
      ";
                // line 98
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                    // line 99
                    echo "        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请重新"), "html", null, true);
                    echo "<a class=\"alert-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开通会员"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 101
                    echo "        <a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                    echo "</a>
      ";
                }
                // line 102
                echo "！
    ";
            } elseif ((            // line 103
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "member_expired")) {
                // line 104
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_renew");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
    ";
            } elseif ((            // line 105
(isset($context["vipChecked"]) ? $context["vipChecked"] : null) == "level_low")) {
                // line 106
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                echo "<a class=\"alert-link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级会员"), "html", null, true);
                echo "</a>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                echo "
    ";
            } else {
                // line 108
                echo "      ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程已不支持会员免费学，"), "html", null, true);
                echo "<a class=\"alert-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" data-go=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                echo "</a>
    ";
            }
            // line 110
            echo "  </div>
";
        }
        // line 112
        echo "
";
        // line 113
        if ( !(isset($context["isNonExpired"]) ? $context["isNonExpired"] : null)) {
            // line 114
            echo "  <div class=\"alert alert-danger alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您购买的课程已到期，无法学习课时、提问等。如有疑问，请联系老师，或点击"), "html", null, true);
            echo "
      <a class=\"btn btn-primary btn-sm \"  href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
      ";
            // line 118
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                // line 119
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新购买"), "html", null, true);
                echo "
      ";
            } else {
                // line 121
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新加入"), "html", null, true);
                echo "
      ";
            }
            // line 123
            echo "    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 123,  383 => 121,  377 => 119,  375 => 118,  371 => 117,  367 => 116,  363 => 114,  361 => 113,  358 => 112,  354 => 110,  342 => 108,  330 => 106,  328 => 105,  317 => 104,  315 => 103,  312 => 102,  302 => 101,  292 => 99,  290 => 98,  285 => 97,  283 => 96,  279 => 94,  277 => 93,  272 => 90,  268 => 88,  260 => 85,  257 => 84,  255 => 83,  246 => 79,  240 => 78,  235 => 76,  231 => 74,  223 => 71,  220 => 70,  218 => 69,  215 => 68,  210 => 65,  200 => 61,  197 => 60,  194 => 59,  183 => 56,  174 => 53,  171 => 52,  169 => 51,  166 => 50,  164 => 49,  157 => 45,  154 => 44,  149 => 42,  142 => 41,  140 => 40,  136 => 39,  130 => 38,  127 => 37,  125 => 36,  120 => 33,  117 => 32,  106 => 30,  103 => 29,  99 => 28,  94 => 27,  92 => 26,  87 => 23,  84 => 22,  78 => 20,  76 => 19,  71 => 18,  68 => 17,  66 => 16,  61 => 15,  59 => 14,  54 => 13,  52 => 12,  45 => 11,  39 => 9,  37 => 8,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
