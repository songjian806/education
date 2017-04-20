<?php

/* TopxiaWebBundle:Course:Part/normal-header.html.twig */
class __TwigTemplate_fa990020143db9f9016041fb338a87de8b4158fbfaaf5687277ea1e5ef47bc95 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 1);
        // line 2
        $context["header_macro"] = $this;
        // line 3
        echo "
";
        // line 4
        $this->env->getExtension('topxia_web_twig')->loadScript("course/common");
        // line 5
        echo "
";
        // line 6
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 7
            echo "  ";
            $asm89CacheStrategy6 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key6 = $asm89CacheStrategy6->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "normal/header/for/member"), 600            );
            $asm89CacheBody6 = $asm89CacheStrategy6->fetchBlock($asm89Key6);
            if ($asm89CacheBody6 === false) {
                ob_start();
                    // line 8
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-member.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 8)->display($context);
                    // line 9
                    echo "  ";
                
                $asm89CacheBody6 = ob_get_clean();
                $asm89CacheStrategy6->saveBlock($asm89Key6, $asm89CacheBody6);
            }
            echo $asm89CacheBody6;
        } elseif ((($this->getAttribute(        // line 10
(isset($context["course"]) ? $context["course"] : null), "parentId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()), false)) : (false))) {
            // line 11
            echo "  ";
            $asm89CacheStrategy7 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key7 = $asm89CacheStrategy7->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/classroom/course/normal/header/for/guest"), 600            );
            $asm89CacheBody7 = $asm89CacheStrategy7->fetchBlock($asm89Key7);
            if ($asm89CacheBody7 === false) {
                ob_start();
                    // line 12
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 12)->display(array_merge($context, array("source" => "classroom")));
                    // line 13
                    echo "  ";
                
                $asm89CacheBody7 = ob_get_clean();
                $asm89CacheStrategy7->saveBlock($asm89Key7, $asm89CacheBody7);
            }
            echo $asm89CacheBody7;
        } else {
            // line 15
            echo "  ";
            $asm89CacheStrategy8 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key8 = $asm89CacheStrategy8->generateKey((("course/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())) . "/not/classroom/course/normal/header/for/guest"), 600            );
            $asm89CacheBody8 = $asm89CacheStrategy8->fetchBlock($asm89Key8);
            if ($asm89CacheBody8 === false) {
                ob_start();
                    // line 16
                    echo "    ";
                    $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-for-guest.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 16)->display($context);
                    // line 17
                    echo "  ";
                
                $asm89CacheBody8 = ob_get_clean();
                $asm89CacheStrategy8->saveBlock($asm89Key8, $asm89CacheBody8);
            }
            echo $asm89CacheBody8;
        }
        // line 19
        echo "
";
        // line 41
        echo "
";
        // line 145
        echo "
";
        // line 162
        echo "
";
        // line 178
        echo "
";
    }

    // line 20
    public function getpicture($__course__ = null, $__previewLesson__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "previewLesson" => $__previewLesson__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "  <div class=\"course-img\">
    ";
            // line 22
            if ((isset($context["previewLesson"]) ? $context["previewLesson"] : null)) {
                // line 23
                echo "      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["previewLesson"]) ? $context["previewLesson"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"course-img-cover\">
        <i class=\"es-icon es-icon-playcircleoutline\"></i>
      </a>
    ";
            }
            // line 27
            echo "
    <img class=\"img-responsive\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "\">
    <div class=\"tags\">
      ";
            // line 30
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 31
                echo "        <span class=\"tag-serialing\"></span>
      ";
            } elseif (($this->getAttribute(            // line 32
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 33
                echo "        <span class=\"tag-finished\"></span>
      ";
            }
            // line 35
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
                // line 36
                echo "        <span class=\"tag-live\"></span>
      ";
            }
            // line 38
            echo "    </div>
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getinfo($__course__ = null, $__member__ = null, $__userVipStatus__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "member" => $__member__,
            "userVipStatus" => $__userVipStatus__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "  ";
            $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 43);
            // line 44
            echo "  <div class=\"course-info\">
    <h2 class=\"title\">
      ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "
      <span class=\"es-qrcode top\" data-url=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_qrcode", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
        <i class=\"es-icon es-icon-qrcode\"></i>
        <span class=\"qrcode-popover\">
          <img src=\"\" alt=\"\">
          ";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
            echo "
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
            echo "
        </span>
      </span>
    </h2>
    <div class=\"subtitle\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "html", null, true);
            echo "</div>
    <div class=\"metas\">
      <div class=\"score\">
        ";
            // line 59
            echo $context["web_macro"]->getstar($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "rating", array()));
            echo "
        <span>(";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "ratingNum", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
            echo ")</span>
      </div>

      ";
            // line 63
            if (((isset($context["member"]) ? $context["member"] : null) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > 0))) {
                // line 64
                echo "        ";
                if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()) > twig_date_format_filter($this->env, "now", "U"))) {
                    // line 65
                    echo "          <p class=\"expiry-date hidden-sm\">
            <span class=\"mrm\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期至"), "html", null, true);
                    echo "</span>
            <span>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</span>
          </p>
        ";
                } else {
                    // line 70
                    echo "         <div class=\"alert alert-danger alert-dismissable\">
            ";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您购买的课程已到期，无法学习课时、提问等。如有疑问请联系老师，或点击"), "html", null, true);
                    echo "
              <a class=\" \"  href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_rebuy", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">
              ";
                    // line 73
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        // line 74
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新购买"), "html", null, true);
                        echo "
              ";
                    } else {
                        // line 76
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新加入"), "html", null, true);
                        echo "
              ";
                    }
                    // line 78
                    echo "              </a>。
          </div>
        ";
                }
                // line 81
                echo "      ";
            }
            // line 82
            echo "

      ";
            // line 84
            if ( !(isset($context["member"]) ? $context["member"] : null)) {
                // line 85
                echo "        ";
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array())) {
                    // line 86
                    echo "          <p class=\"expiry-date hidden-sm\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买截止日期: "), "html", null, true);
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), "Y-m-d H:i"), "html", null, true);
                    echo "</p>
        ";
                }
                // line 88
                echo "
        ";
                // line 89
                if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array())) {
                    // line 90
                    echo "          <p class=\"expiry-date hidden-sm\">
            ";
                    // line 91
                    if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), null)) : (null)) == "date")) {
                        // line 92
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习有效期至: "), "html", null, true);
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "Y-m-d H:i"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 94
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习有效期: "), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
                        echo "
            ";
                    }
                    // line 96
                    echo "          </p>
        ";
                }
                // line 98
                echo "        <p class=\"discount-price\">
          <label>";
                // line 99
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</label>
          ";
                // line 100
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 100)->display(array_merge($context, array("shows" => array(0 => "price", 1 => "discount"))));
                // line 101
                echo "        </p>
        ";
                // line 102
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountId", array()) > 0)) {
                    // line 103
                    echo "          <p class=\"old-price hidden-sm\">
            <label>";
                    // line 104
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原价"), "html", null, true);
                    echo "</label>
            ";
                    // line 105
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 105)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
                    // line 106
                    echo "          </p>
          ";
                    // line 107
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), null)) : (null))) {
                        // line 108
                        echo "            <p class=\"activity\">
              <label>";
                        // line 109
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("活动"), "html", null, true);
                        echo "</label>
              <span class=\"name\">";
                        // line 110
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "name", array()), "html", null, true);
                        echo "</span>
              <span>
                <i class=\"es-icon es-icon-accesstime\"></i>
                <span id=\"discount-endtime-countdown\" class=\"text-muted\" data-remaintime=\"";
                        // line 113
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discountObj", array()), "endTime", array()) - twig_date_format_filter($this->env, "now", "U")), "html", null, true);
                        echo "\"
                ></span>
              </span>
            </p>
          ";
                    }
                    // line 118
                    echo "        ";
                }
                // line 119
                echo "
      ";
            }
            // line 121
            echo "
    </div>

    ";
            // line 124
            if ((((( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fake", array()), false)) : (false)) && (isset($context["member"]) ? $context["member"] : null)) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student")) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "levelId", array()) > 0)) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
                // line 125
                echo "      <div class=\"alert alert-danger\">
        ";
                // line 126
                if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "not_member")) {
                    // line 127
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您已经不是会员，不能学习此课程！"), "html", null, true);
                    echo "
          ";
                    // line 128
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        // line 129
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请重新"), "html", null, true);
                        echo "<a class=\"btn-link\" href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip");
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开通会员"), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 131
                        echo "            <a class=\"btn-link js-exit-course\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\" data-go=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                        echo "</a>
          ";
                    }
                    // line 132
                    echo "！
        ";
                } elseif ((                // line 133
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "member_expired")) {
                    // line 134
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的会员已过期，不能学习此课程，请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_renew");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("续费"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                    echo "
        ";
                } elseif ((                // line 135
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "level_low")) {
                    // line 136
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员等级不够，不能学习此课程。请先"), "html", null, true);
                    echo "<a class=\"btn-link\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("vip_upgrade");
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("升级会员"), "html", null, true);
                    echo "</a>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("。"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 138
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("此课程已不支持会员免费学，"), "html", null, true);
                    echo "<a class=\"btn-link js-exit-course\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exit", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" data-go=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回课程首页"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 140
                echo "      </div>
    ";
            }
            // line 142
            echo "
  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getstudent_num($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 147
            echo "  <div class=\"student-num hidden-xs\">
    ";
            // line 148
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 149
                echo "      <i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%studentNum%人", array("%studentNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()))), "html", null, true);
                echo "
      ";
                // line 150
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0)) {
                    // line 151
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))) {
                        // line 152
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名额已满"), "html", null, true);
                        echo ")</small>
        ";
                    } else {
                        // line 154
                        echo "          <small class=\"hidden-sm text-sm\">(";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%maxStudentNum%名额", array("%maxStudentNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))), "html", null, true);
                        echo ")</small>
        ";
                    }
                    // line 156
                    echo "      ";
                }
                // line 157
                echo "    ";
            } else {
                // line 158
                echo "      <i class=\"es-icon es-icon-accesstime\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%lessonNum%课时", array("%lessonNum%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "lessonNum", array()))), "html", null, true);
                echo "
    ";
            }
            // line 160
            echo "  </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 163
    public function getfavorite_btn($__course__ = null, $__hasFavorited__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "hasFavorited" => $__hasFavorited__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 164
            echo "  <li id=\"unfavorite-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\" class=\"color-primary\">
      <p><i class=\"es-icon es-icon-bookmark\"></i></p>
      <p>";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已收藏"), "html", null, true);
            echo "</p>
    </a>
  </li>

  <li id=\"favorite-btn\" data-url=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["hasFavorited"]) ? $context["hasFavorited"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">
    <a href=\"javascript:;\">
      <p><i class=\"es-icon es-icon-bookmarkoutline\"></i></p>
      <p>";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
            echo "</p>
    </a>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 179
    public function getshare_btn($__course__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "course" => $__course__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 180
            echo "  <li>
    <span class=\"es-share top\">
      <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\">
        <p><i class=\"es-icon es-icon-share\"></i></p>
        <p>";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
            echo "</p>
      </a>
      ";
            // line 186
            $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Course:Part/normal-header.html.twig", 186)->display(array_merge($context, array("type" => "course")));
            // line 187
            echo "    </span>
  </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  627 => 187,  625 => 186,  620 => 184,  614 => 180,  602 => 179,  587 => 174,  577 => 171,  570 => 167,  559 => 164,  546 => 163,  534 => 160,  528 => 158,  525 => 157,  522 => 156,  516 => 154,  510 => 152,  507 => 151,  505 => 150,  500 => 149,  498 => 148,  495 => 147,  483 => 146,  470 => 142,  466 => 140,  454 => 138,  442 => 136,  440 => 135,  429 => 134,  427 => 133,  424 => 132,  414 => 131,  404 => 129,  402 => 128,  397 => 127,  395 => 126,  392 => 125,  390 => 124,  385 => 121,  381 => 119,  378 => 118,  370 => 113,  364 => 110,  360 => 109,  357 => 108,  355 => 107,  352 => 106,  350 => 105,  346 => 104,  343 => 103,  341 => 102,  338 => 101,  336 => 100,  332 => 99,  329 => 98,  325 => 96,  316 => 94,  309 => 92,  307 => 91,  304 => 90,  302 => 89,  299 => 88,  292 => 86,  289 => 85,  287 => 84,  283 => 82,  280 => 81,  275 => 78,  269 => 76,  263 => 74,  261 => 73,  257 => 72,  253 => 71,  250 => 70,  244 => 67,  240 => 66,  237 => 65,  234 => 64,  232 => 63,  225 => 60,  221 => 59,  215 => 56,  208 => 52,  204 => 51,  197 => 47,  193 => 46,  189 => 44,  186 => 43,  172 => 42,  159 => 38,  155 => 36,  152 => 35,  148 => 33,  146 => 32,  143 => 31,  141 => 30,  134 => 28,  131 => 27,  123 => 23,  121 => 22,  118 => 21,  105 => 20,  100 => 178,  97 => 162,  94 => 145,  91 => 41,  88 => 19,  80 => 17,  77 => 16,  70 => 15,  62 => 13,  59 => 12,  52 => 11,  50 => 10,  43 => 9,  40 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
