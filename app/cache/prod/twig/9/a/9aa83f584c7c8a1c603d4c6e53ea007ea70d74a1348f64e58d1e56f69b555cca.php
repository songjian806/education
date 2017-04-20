<?php

/* TopxiaWebBundle:CourseManage:base.html.twig */
class __TwigTemplate_9aa83f584c7c8a1c603d4c6e53ea007ea70d74a1348f64e58d1e56f69b555cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "base";
        // line 6
        $context["script_controller"] = "course-manage/base";
        // line 7
        $context["script_arguments"] = array("categoryUrl" => $this->env->getExtension('routing')->getPath("category_all"), "tagMatchUrl" => $this->env->getExtension('routing')->getPath("tag_match"), "locationUrl" => $this->env->getExtension('routing')->getPath("location_all"), "isCoursePublished" => $this->getAttribute(        // line 11
(isset($context["course"]) ? $context["course"] : null), "status", array()));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
      <form class=\"form-horizontal\" id=\"course-form\" method=\"post\">

        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_title\" name=\"title\" required=\"required\" class=\"form-control\"
                   value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("副标题"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <textarea id=\"course_subtitle\" name=\"subtitle\" required=\"required\"
                      class=\"form-control\">";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "subtitle", array()), "")) : ("")), "html", null, true);
        echo "</textarea>
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_tags\" name=\"tags\" required=\"required\" class=\"width-full select2-offscreen\"
                   tabindex=\"-1\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["tags"]) ? $context["tags"] : null), ","), "html", null, true);
        echo "\"
                   data-explain=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "\">
            <div class=\"help-block\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用于按标签搜索课程、相关课程的提取等，由网校管理员后台统一管理"), "html", null, true);
        echo "</div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程购买"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 53
        echo $this->env->getExtension('topxia_html_twig')->radios("buyable", array("1" => $this->env->getExtension('translator')->trans("开启"), "0" => $this->env->getExtension('translator')->trans("关闭")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), 1)) : (1)));
        echo "
            <div class=\"help-block\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后课程将无法在线购买加入、由教师/管理员后台导入。"), "html", null, true);
        echo "</div>
          </div>
        </div>

        ";
        // line 58
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 59
            echo "
          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\"
                   for=\"maxStudentNum-field\">";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播最大%user_name%数", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")))), "html", null, true);
            echo "</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"maxStudentNum-field\" name=\"maxStudentNum\"
                     class=\"form-control width-input width-input-large\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()), 20)) : (20)), "html", null, true);
            echo "\"
                     data-live-capacity-url=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_capacity", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("人"), "html", null, true);
            echo "
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>

        ";
        }
        // line 72
        echo "
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 74
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
        // line 76
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 77
            echo "              <input type=\"hidden\" name=\"expiryMode\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "html", null, true);
            echo "\">
              ";
            // line 78
            echo $this->env->getExtension('topxia_html_twig')->radios("expiryMode", array("date" => $this->env->getExtension('translator')->trans("截止日期"), "days" => $this->env->getExtension('translator')->trans("有效期天数"), "none" => $this->env->getExtension('translator')->trans("无")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")), "disabled");
            echo "
            ";
        } else {
            // line 80
            echo "              ";
            echo $this->env->getExtension('topxia_html_twig')->radios("expiryMode", array("date" => $this->env->getExtension('translator')->trans("截止日期"), "days" => $this->env->getExtension('translator')->trans("有效期天数"), "none" => $this->env->getExtension('translator')->trans("无")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")));
            echo "
            ";
        }
        // line 82
        echo "            <div class=\"help-block\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期方式一旦选定，课程发布后无法更改。"), "html", null, true);
        echo "</div>
          </div>
        </div>
        <div class=\"form-group expiry-day-js ";
        // line 85
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")) == "none")) {
            echo " hidden ";
        }
        echo "\">
          <label class=\"col-md-2 control-label\"></label>
          <div class=\"col-md-8 controls\">
            <input type=\"text\" id=\"course_expiryDay\" name=\"expiryDay\" required=\"required\" value=\"";
        // line 88
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")) == "date")) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "Y-m-d"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()), "html", null, true);
        }
        echo "\"
                   class=\"form-control width-input width-input-large\" > <span
                ";
        // line 90
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")) != "days")) {
            echo "class=\"hidden\" ";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
        echo " </span>
            ";
        // line 91
        $context["date_help"] = $this->env->getExtension('translator')->trans("设置该值后，%user_name%只能在截止日期前进行课程的学习，系统默认会在截止时间前10天提醒学员。", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员"))));
        // line 92
        echo "            ";
        $context["days_help"] = $this->env->getExtension('translator')->trans("设置该值后，%user_name%学员只能在有效天数内进行课程的学习，系统默认会在有效期前10天提醒学员。", array("%user_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员"))));
        // line 93
        echo "            <div class=\"help-block\" data-date=\"";
        echo twig_escape_filter($this->env, (isset($context["date_help"]) ? $context["date_help"] : null), "html", null, true);
        echo "\" data-days=\"";
        echo twig_escape_filter($this->env, (isset($context["days_help"]) ? $context["days_help"] : null), "html", null, true);
        echo "\">
              ";
        // line 94
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")) == "date")) {
            echo "  ";
            echo twig_escape_filter($this->env, (isset($context["date_help"]) ? $context["date_help"] : null), "html", null, true);
        } elseif (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryMode", array()), "none")) : ("none")) == "days")) {
            echo twig_escape_filter($this->env, (isset($context["days_help"]) ? $context["days_help"] : null), "html", null, true);
            echo " ";
        }
        // line 95
        echo "            </div>";
        // line 96
        echo "          </div>
        </div>
        ";
        // line 98
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal")) {
            // line 99
            echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连载状态"), "html", null, true);
            echo "</label>
            <div class=\"col-md-8 controls radios\">
              ";
            // line 102
            echo $this->env->getExtension('topxia_html_twig')->radios("serializeMode", array("none" => $this->env->getExtension('translator')->trans("非连载课程"), "serialize" => $this->env->getExtension('translator')->trans("更新中"), "finished" => $this->env->getExtension('translator')->trans("已完结")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()), "none")) : ("none")));
            echo "
            </div>
          </div>
        ";
        }
        // line 106
        echo "
        ";
        // line 107
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) {
            // line 108
            echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频观看时间限制"), "html", null, true);
            echo "</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\"  name=\"watchLimit\" required=\"required\"
                     class=\"form-control width-input width-input-large\"
                     value=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("倍单视频总时长"), "html", null, true);
            echo "
              <div class=\"help-block\">";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("0表示不限制。"), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 118
        echo "
        ";
        // line 119
        if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.buy_before_approval")) {
            // line 120
            echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实名认证"), "html", null, true);
            echo "</label>
            <div class=\"col-md-8 controls radios\">
              ";
            // line 123
            echo $this->env->getExtension('topxia_html_twig')->radios("approval", array("1" => $this->env->getExtension('translator')->trans("是"), "0" => $this->env->getExtension('translator')->trans("否")), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()));
            echo "
              <div class=\"help-block\">";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置该值后，学员购买课程前，必须先去申请实名认证。"), "html", null, true);
            echo "</div>
            </div>
          </div>
        ";
        }
        // line 128
        echo "
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类"), "html", null, true);
        echo "</label>
          <div class=\"col-md-8 controls\">
            <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\"
                    class=\"form-control width-input width-input-large\">
              ";
        // line 134
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "categoryId", array()), $this->env->getExtension('translator')->trans("分类"));
        echo "
            </select>
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        ";
        // line 140
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaWebBundle:CourseManage:base.html.twig", 140)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 141
        echo "
        ";
        // line 142
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live")) {
            // line 143
            echo "          <div id=\"live-plugin-url\" class=\"form-group hidden\">
            <div class=\"col-md-offset-2 col-md-8 controls\">
              <a href=\"\" target=\"_blank\">";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播“桌面分享”插件下载"), "html", null, true);
            echo "</a>
            </div>
          </div>
        ";
        }
        // line 149
        echo "        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  369 => 155,  362 => 151,  358 => 149,  351 => 145,  347 => 143,  345 => 142,  342 => 141,  340 => 140,  331 => 134,  324 => 130,  320 => 128,  313 => 124,  309 => 123,  304 => 121,  301 => 120,  299 => 119,  296 => 118,  289 => 114,  283 => 113,  276 => 109,  273 => 108,  271 => 107,  268 => 106,  261 => 102,  256 => 100,  253 => 99,  251 => 98,  247 => 96,  245 => 95,  237 => 94,  230 => 93,  227 => 92,  225 => 91,  217 => 90,  208 => 88,  200 => 85,  193 => 82,  187 => 80,  182 => 78,  177 => 77,  175 => 76,  165 => 74,  161 => 72,  150 => 66,  146 => 65,  140 => 62,  135 => 59,  133 => 58,  126 => 54,  122 => 53,  117 => 51,  109 => 46,  105 => 45,  101 => 44,  95 => 41,  86 => 35,  80 => 32,  71 => 26,  65 => 23,  59 => 20,  52 => 16,  48 => 14,  45 => 13,  37 => 3,  33 => 1,  31 => 11,  30 => 7,  28 => 6,  26 => 5,  11 => 1,);
    }
}
