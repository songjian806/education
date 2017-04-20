<?php

/* ClassroomBundle:ClassroomManage:index.html.twig */
class __TwigTemplate_9a24439876f8b918634a3be8e1ba0302b28f00cfbe9027042fa379b8237ee889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "main";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
";
        // line 10
        $context["unsetted"] = "";
        // line 11
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-body\">
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("简介"), "html", null, true);
        echo "</td>
              ";
        // line 22
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array())) {
            // line 23
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未设置"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 28
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",简介"));
            // line 29
            echo "              ";
        } else {
            // line 30
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 34
        echo "            </tr>
            <tr>
              <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图片"), "html", null, true);
        echo "</td>
              ";
        // line 37
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array())) {
            // line 38
            echo "                <td>
                  <a class=\"btn btn-danger btn-xs pull-right\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未设置"), "html", null, true);
            echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                  </a>
                </td>
                ";
            // line 43
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",图片"));
            // line 44
            echo "              ";
        } else {
            // line 45
            echo "                <td>
                  <i class=\"glyphicon glyphicon-ok-sign pull-right text-success\"></i>
                </td>
              ";
        }
        // line 49
        echo "            </tr>
            <tr>
              <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn btn-info btn-xs pull-right\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 54
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 55
            echo "                    ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
                    ";
            // line 56
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")) == 0)) {
                // line 57
                echo "                      ";
                $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",价格"));
                // line 58
                echo "                    ";
            }
            // line 59
            echo "                  ";
        } else {
            // line 60
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "
                    ";
            // line 61
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) == 0)) {
                // line 62
                echo "                      ";
                $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",价格"));
                // line 63
                echo "                    ";
            }
            // line 64
            echo "                  ";
        }
        // line 65
        echo "                  <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程数"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn btn-";
        // line 79
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) > 0)) {
            echo "info";
        } else {
            echo "danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 80
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), 0)) : (0)), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
              ";
        // line 83
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) == 0)) {
            // line 84
            echo "                ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",课程"));
            // line 85
            echo "              ";
        }
        // line 86
        echo "            </tr>
            <tr>
              <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时数"), "html", null, true);
        echo "</td>
              <td><span class=\"label label-default pull-right\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "lessonNum", array()), "html", null, true);
        echo "</span></td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"well\">
          <h4>";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        echo "</h4>
          <table class=\"table\">
            <tr>
              <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员数"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn ";
        // line 101
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("旁听生数"), "html", null, true);
        echo "</td>
              <td>
                <a class=\"btn ";
        // line 109
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array()) > 0)) {
            echo "btn-info";
        } else {
            echo "btn-danger";
        }
        echo " btn-xs pull-right\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_aduitor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
                  ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-circle-arrow-right\"></i>
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    ";
        // line 118
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 119
            echo "      <hr>
      <div class=\"row\">
        <div class=\"col-md-6\">
          <h4>";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%学习情况", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</h4>
          <table class=\"table\">
            <thead>
              <th></th>
              <th>";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("昨日"), "html", null, true);
            echo "</th>
              <th>";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日"), "html", null, true);
            echo "</th>
            </thead>
            <tr>
              <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部学员数"), "html", null, true);
            echo "</td>
              <td>";
            // line 131
            echo twig_escape_filter($this->env, (isset($context["yestodayAllCount"]) ? $context["yestodayAllCount"] : null), "html", null, true);
            echo "</td>
              <td>";
            // line 132
            echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正式学员数"), "html", null, true);
            echo "</td>
              <td>";
            // line 136
            echo twig_escape_filter($this->env, (isset($context["yestodayStudentCount"]) ? $context["yestodayStudentCount"] : null), "html", null, true);
            echo "</td>
              <td>";
            // line 137
            echo twig_escape_filter($this->env, (isset($context["studentCount"]) ? $context["studentCount"] : null), "html", null, true);
            echo "</td>
            </tr>
            <tr>
              <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时完成学习数"), "html", null, true);
            echo "</td>
              <td>";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["yesterdayFinishedLessonNum"]) ? $context["yesterdayFinishedLessonNum"] : null), "html", null, true);
            echo "</td>
              <td>";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["todayFinishedLessonNum"]) ? $context["todayFinishedLessonNum"] : null), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增话题数"), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, (isset($context["yesterdayThreadCount"]) ? $context["yesterdayThreadCount"] : null), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, (isset($context["todayThreadCount"]) ? $context["todayThreadCount"] : null), "html", null, true);
            echo "</td>
            </tr>
          </table>
        </div>

        <div class=\"col-md-6 reviews\">
          <h4>";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最新评价"), "html", null, true);
            echo "</h4>
          <br>
          ";
            // line 155
            if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
                // line 156
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 157
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index", array()) <= 4)) {
                        // line 158
                        echo "                <div class=\"media\">
                  <div class=\"pull-left\">
                    <span class=\"class-name\">";
                        // line 160
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                        echo "</span>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"stars-";
                        // line 163
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["review"], "rating", array())), "html", null, true);
                        echo "\"></div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<time>";
                        // line 164
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", array())), "html", null, true);
                        echo "</time>                                                    
                    <button class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($this->getAttribute((isset($context["reviewUsers"]) ? $context["reviewUsers"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), "id", array()))), "html", null, true);
                        echo "\" style=\"float:right;\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("私信"), "html", null, true);
                        echo "</button>
                  </div>
                  <p>";
                        // line 167
                        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 40);
                        echo "</p>
                </div>
              ";
                    }
                    // line 170
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "          ";
            } else {
                // line 172
                echo "            <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该%name%尚无评价", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                echo "</div>
          ";
            }
            // line 174
            echo "        </div>
      </div>
      <hr>
    ";
        }
        // line 178
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 178,  467 => 174,  461 => 172,  458 => 171,  444 => 170,  438 => 167,  431 => 165,  427 => 164,  423 => 163,  417 => 160,  413 => 158,  410 => 157,  392 => 156,  390 => 155,  385 => 153,  376 => 147,  372 => 146,  368 => 145,  362 => 142,  358 => 141,  354 => 140,  348 => 137,  344 => 136,  340 => 135,  334 => 132,  330 => 131,  326 => 130,  320 => 127,  316 => 126,  309 => 122,  304 => 119,  302 => 118,  291 => 110,  281 => 109,  276 => 107,  268 => 102,  258 => 101,  253 => 99,  247 => 96,  237 => 89,  233 => 88,  229 => 86,  226 => 85,  223 => 84,  221 => 83,  215 => 80,  205 => 79,  200 => 77,  194 => 74,  183 => 65,  180 => 64,  177 => 63,  174 => 62,  172 => 61,  166 => 60,  163 => 59,  160 => 58,  157 => 57,  155 => 56,  148 => 55,  146 => 54,  142 => 53,  137 => 51,  133 => 49,  127 => 45,  124 => 44,  122 => 43,  116 => 40,  112 => 39,  109 => 38,  107 => 37,  103 => 36,  99 => 34,  93 => 30,  90 => 29,  88 => 28,  82 => 25,  78 => 24,  75 => 23,  73 => 22,  69 => 21,  63 => 18,  56 => 14,  51 => 11,  49 => 10,  46 => 9,  43 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
