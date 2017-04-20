<?php

/* ClassroomBundle:ClassroomManage:courses.html.twig */
class __TwigTemplate_f2d0d60c61293efe4d567577321a780cf0f7ad50d27f55f1bbacc1c8b7a81af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:courses.html.twig", 1);
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
        $context["script_controller"] = "classroombundle/controller/classroom/course";
        // line 6
        $context["side_nav"] = "courses";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>

.sort{
    padding-top: 50px;
    padding-right: 20px;
    padding-left: 20px;
}

.price{
  color: #e57259;
  font-size: 16px;
}

</style>

";
        // line 25
        $context["url"] = $this->env->getExtension('routing')->getPath("classroom_courses_select", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())));
        echo "       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程管理"), "html", null, true);
        echo "
    <button class=\"btn btn-success btn-sm panel-bar\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses_pick", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加课程"), "html", null, true);
        echo "</button></div>
  <div class=\"panel-body\">

        <form id=\"courses-form\" class=\"form-horizontal\" method=\"post\">
          ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

          <div class=\"form-group\" id=\"courses-form-group\">
            <div class=\"col-md-12 controls\">
              <ul class=\"course-list-group sortable-list course-wide-list courses-selected\" id=\"course-list-group\" data-role=\"list\" >

                ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 39
            echo "
                <li class=\"course-item item-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo " clearfix\" data-role=\"item\" >
                <input type=\"hidden\" name=\"courseIds[]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" />
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle sort\"></span>    <a class=\"course-picture-link\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                <img class=\"course-picture\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">
                    </a>
                        <button class=\"close delete-btn pull-right mrl mts mll\" data-role=\"item-delete\" type=\"button\" title=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "\" style=\"font-size:35px;\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">× </button>
                    <div class=\"course-body\">
                     <div style=\"float:right;\" class=\"text-muted mrm mls\">
                        ";
            // line 48
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 49
                echo "                            <span class=\"course-price course-price-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" style=\"display:inline\" data-price=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                echo "\">
                              ";
                // line 50
                if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                    // line 51
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "
                                ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                              ";
                } else {
                    // line 54
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                    echo "
                              ";
                }
                // line 56
                echo "                            </span>

                        ";
            } else {
                // line 59
                echo "                          <span class=\"course-price course-price-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" data-price=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                echo "\">
                            ";
                // line 60
                if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                    // line 61
                    echo "                              ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 63
                    echo "                              ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                    echo "
                            ";
                }
                // line 65
                echo "                          </span>
                        ";
            }
            // line 67
            echo "                      </div>

                      <h4 class=\"course-title\"><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a>
                      ";
            // line 70
            if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                // line 71
                echo "                        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                echo "</span>
                      ";
            } elseif (($this->getAttribute(            // line 72
$context["course"], "serializeMode", array()) == "finished")) {
                // line 73
                echo "                        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                echo "</span>
                      ";
            }
            // line 75
            echo "                      ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 76
                echo "                          ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 77
                echo "                          ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                    // line 78
                    echo "                            <span class=\"label label-warning\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                    echo "</span>
                          ";
                } else {
                    // line 80
                    echo "                            <span class=\"label label-success\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                    echo "</span>
                          ";
                }
                // line 82
                echo "                      ";
            }
            // line 83
            echo "                      </h4>

                      ";
            // line 85
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 86
                echo "                        ";
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                // line 87
                echo "                        ";
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 88
                    echo "                          <div class=\"live-course-lesson mbm\">
                            <span class=\"text-success fsm mrm\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "m-d H:i"), "html", null, true);
                    echo " ~ ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                    echo "</span>
                            <span class=\"text-muted fsm mrm\">";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第%number%课时", array("%number%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()))), "html", null, true);
                    echo "</span>
                          </div>
                        ";
                }
                // line 93
                echo "                      ";
            } else {
                // line 94
                echo "                        <div class=\"course-about ellipsis\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                echo "</div>
                      ";
            }
            // line 96
            echo "
                      <div class=\"course-footer clearfix\">
                        ";
            // line 98
            $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
            // line 99
            echo "                        ";
            if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                // line 100
                echo "                          <div class=\"teacher\">
                            <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" class=\"teacher-avatar\"></a>
                            <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                echo "</a>
                            <span class=\"teacher-title ellipsis\">";
                // line 103
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                echo "</span>
                          </div>
                        ";
            }
            // line 106
            echo "
                        <div class=\"course-metas\">  

                          ";
            // line 109
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 110
                echo "                          <span class=\"text-muted text-sm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                echo "</span>
                          <span class=\"divider\"></span>
                          ";
            }
            // line 112
            echo "  

                            <span class=\"text-muted text-sm\">
                                ";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%lessonNum%个课时", array("%lessonNum%" => $this->getAttribute($context["course"], "lessonNum", array()))), "html", null, true);
            echo "
                            </span>
                            <span class=\"divider\"></span>
                            <span class=\"text-muted text-sm\">
                                ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("有效期:"), "html", null, true);
            echo "
                                ";
            // line 120
            if ($this->getAttribute($context["course"], "expiryDay", array())) {
                // line 121
                echo "                                  ";
                if (((($this->getAttribute($context["course"], "expiryMode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "expiryMode", array()), null)) : (null)) == "date")) {
                    // line 122
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["course"], "expiryDay", array()), "Y-m-d H:i"), "html", null, true);
                    echo "
                                  ";
                } else {
                    // line 124
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "expiryDay", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
                    echo "
                                  ";
                }
                // line 126
                echo "                                ";
            } else {
                // line 127
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("永久"), "html", null, true);
                echo "
                                ";
            }
            // line 129
            echo "                            </span>
                        </div>

                      </div>

                    </div>
                </li>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "
              </ul>
            </div>  
          </div>

          ";
        // line 143
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 144
            echo "          <div class=\"alert alert-warning pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("若%name%课程被移除，则该课程内所有学习数据将被清空。", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
          <div class=\"form-group\">
            <div class=\"col-md-offset-9 col-md-3 controls\">
              <div class=\"mbl pull-right\">";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("共计:"), "html", null, true);
            echo " &nbsp; &nbsp;
                  ";
            // line 148
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 149
                echo "                    <span class=\"price\" style=\"display:inline\">

                        <span  id=\"price\">";
                // line 151
                echo twig_escape_filter($this->env, (isset($context["coinPrice"]) ? $context["coinPrice"] : null), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "

                    </span>

                  ";
            } else {
                // line 156
                echo "                    <span class=\"price\">

                        <span id=\"price\">";
                // line 158
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                echo "
                      
                    </span>
                  ";
            }
            // line 162
            echo "  
              </div>

              <button type=\"submit\" class=\"btn btn-fat btn-primary pull-right\">";
            // line 165
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存修改"), "html", null, true);
            echo "</button>

            </div>  
          </div>
          ";
        } else {
            // line 170
            echo "          <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("赶紧添加课程吧！"), "html", null, true);
            echo "</div>
          ";
        }
        // line 172
        echo "
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

        </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 173,  438 => 172,  432 => 170,  424 => 165,  419 => 162,  410 => 158,  406 => 156,  396 => 151,  392 => 149,  390 => 148,  386 => 147,  379 => 144,  377 => 143,  370 => 138,  356 => 129,  350 => 127,  347 => 126,  340 => 124,  334 => 122,  331 => 121,  329 => 120,  325 => 119,  318 => 115,  313 => 112,  305 => 110,  303 => 109,  298 => 106,  292 => 103,  286 => 102,  280 => 101,  277 => 100,  274 => 99,  272 => 98,  268 => 96,  262 => 94,  259 => 93,  253 => 90,  247 => 89,  244 => 88,  241 => 87,  238 => 86,  236 => 85,  232 => 83,  229 => 82,  223 => 80,  217 => 78,  214 => 77,  211 => 76,  208 => 75,  202 => 73,  200 => 72,  195 => 71,  193 => 70,  187 => 69,  183 => 67,  179 => 65,  173 => 63,  165 => 61,  163 => 60,  156 => 59,  151 => 56,  145 => 54,  140 => 52,  135 => 51,  133 => 50,  126 => 49,  124 => 48,  116 => 45,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  94 => 39,  90 => 38,  81 => 32,  72 => 28,  68 => 27,  63 => 25,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
