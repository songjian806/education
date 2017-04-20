<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_0e2601f3c0763d57350b4aac9e2b28bef48d2c19d5fdc6279ac6749622244117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理后台"), "html", null, true);
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:validateDomain"));
        echo "
  <div class=\"row\">
    ";
        // line 9
        if ( !(_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 10
            echo "      ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:getCloudNotices"));
            echo "
    ";
        }
        // line 12
        echo "
   
      
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日数据"), "html", null, true);
        echo " 
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录用户"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("15分钟内活动的登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在线总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("15分钟内活动用户数，包括登录用户及未登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增注册"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("平台新增用户数，包括自主注册、第三方注册及导入"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增学员人次"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日加入课程和班级的总人次，1个学员加入2个课程，算2人次"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增会员"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日购买会员的人数"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未回复问答"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日新产生问题中未回答的数量"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未回复总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("到目前为止，未回答问题总数"), "html", null, true);
        echo "</div>
          </div>
        </div>
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin_operation_analysis");
        echo "\">
      <div class=\"empty\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
    </div>
  </div>
  ";
        // line 96
        echo "
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\">最近7天
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("admin_study_statistic", array("period" => "month"));
        echo "\">最近30天
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单统计"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("平台当日产生的所有订单，包括免费和付费"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("付费订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("平台当日产生的订单价格大于0元的订单"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 143
        echo $this->env->getExtension('routing')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("admin_order_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("付费订单统计"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-lesson-switch-button\"
                      data-time=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("admin_lesson_learn_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-lesson-switch-button\"
                      data-time=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("admin_lesson_learn_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时完成数"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("点击\"学过了\"的课时数量"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-lesson-count-statistic\"
             data-url=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("admin_lesson_learn_statistic", array("period" => "week"));
        echo "\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 197
        echo $this->env->getExtension('routing')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : null), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 200
        echo $this->env->getExtension('routing')->getPath("admin_course_explore", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程排行榜"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"";
        // line 218
        echo $this->env->getExtension('routing')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
          >";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新问答"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 223
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
        echo "
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"";
        // line 231
        echo $this->env->getExtension('routing')->getPath("admin_review");
        echo "\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">
            ";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新评价"), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 237
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:courseReview"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          ";
        // line 245
        echo "          <h3 class=\"panel-title\">
            ";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门搜索"), "html", null, true);
        echo "
            <small>";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近7天"), "html", null, true);
        echo "</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 251
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("cloud_search.search_enabled")) {
            // line 252
            echo "            <div class=\"empty\">
              <a target=\"_blank\" href=\"";
            // line 253
            echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_search");
            echo "\">免费接入云搜索获取热门搜索关键词</a>
            </div>
          ";
        } else {
            // line 256
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:Default:cloudSearchRanking"));
            echo "
          ";
        }
        // line 258
        echo "        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 258,  488 => 256,  482 => 253,  479 => 252,  477 => 251,  470 => 247,  466 => 246,  463 => 245,  453 => 237,  446 => 233,  439 => 231,  428 => 223,  422 => 220,  418 => 219,  414 => 218,  399 => 206,  393 => 203,  385 => 200,  379 => 199,  372 => 197,  366 => 196,  352 => 185,  343 => 179,  335 => 174,  327 => 171,  321 => 170,  314 => 168,  308 => 167,  300 => 164,  285 => 152,  279 => 149,  271 => 146,  265 => 145,  258 => 143,  252 => 142,  244 => 139,  232 => 130,  223 => 124,  219 => 123,  213 => 120,  209 => 119,  201 => 114,  194 => 110,  188 => 109,  182 => 106,  176 => 105,  168 => 102,  160 => 96,  154 => 57,  150 => 56,  141 => 50,  137 => 49,  131 => 46,  127 => 45,  121 => 42,  117 => 41,  111 => 38,  107 => 37,  101 => 34,  97 => 33,  91 => 30,  87 => 29,  81 => 26,  77 => 25,  70 => 21,  59 => 12,  53 => 10,  51 => 9,  45 => 7,  43 => 6,  40 => 5,  34 => 2,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
