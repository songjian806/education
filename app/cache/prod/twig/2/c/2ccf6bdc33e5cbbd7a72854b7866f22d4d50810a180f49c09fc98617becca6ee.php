<?php

/* TopxiaWebBundle:Course:course-select-list.html.twig */
class __TwigTemplate_2ccf6bdc33e5cbbd7a72854b7866f22d4d50810a180f49c09fc98617becca6ee extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:course-select-list.html.twig", 1);
        // line 2
        echo "<style>
.course-wide-list .enabled:hover{

    background: #eee;
    border-color: #ddd;
}

.course-wide-list .enabled{

    cursor: default;
    background: #eee;
}

</style>
<ul class=\"course-wide-list\">
  ";
        // line 17
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 18
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 19
                echo "
  <li class=\"course-item clearfix\"   data-id=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" >
    <a class=\"course-picture-link\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
      <img class=\"course-picture\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
    </a>
    <div class=\"course-body\">
      <div style=\"float:right;\" class=\"text-muted mrm mls\">
        ";
                // line 26
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 27
                    echo "          <span class=\"course-price\" style=\"display:inline\">
            ";
                    // line 28
                    if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                        // line 29
                        echo "               ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["course"], "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 31
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "
            ";
                    }
                    // line 33
                    echo "          </span>
        ";
                } else {
                    // line 35
                    echo "          <span class=\"course-price\">
            ";
                    // line 36
                    if (($this->getAttribute($context["course"], "price", array()) > 0)) {
                        // line 37
                        echo "               ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格 : %price%元", array("%price%" => $this->getAttribute($context["course"], "price", array()))), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 39
                        echo "              ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "
            ";
                    }
                    // line 41
                    echo "          </span>
        ";
                }
                // line 43
                echo "
        ";
                // line 44
                if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                    // line 45
                    echo "          <span class=\"divider\"></span>
          <span class=\"text-muted mrm mls\"><strong>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                    echo "</strong>";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), $this->env->getExtension('translator')->trans("学员"))) : ($this->env->getExtension('translator')->trans("学员"))), "html", null, true);
                    echo "</span>
        ";
                }
                // line 48
                echo "
      </div>

      <h4 class=\"course-title\"><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
      ";
                // line 52
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 53
                    echo "        <span class=\"label label-success \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更新中"), "html", null, true);
                    echo "</span>
      ";
                } elseif (($this->getAttribute(                // line 54
$context["course"], "serializeMode", array()) == "finished")) {
                    // line 55
                    echo "        <span class=\"label label-warning \">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 57
                echo "
      ";
                // line 58
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 59
                    echo "          ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                    // line 60
                    echo "          ";
                    if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                        // line 61
                        echo "            <span class=\"label label-warning\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播中"), "html", null, true);
                        echo "</span>
          ";
                    } else {
                        // line 63
                        echo "            <span class=\"label label-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 65
                    echo "      ";
                }
                // line 66
                echo "      </h4>

      ";
                // line 68
                if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                    // line 69
                    echo "        ";
                    $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array()), null)) : (null));
                    // line 70
                    echo "        ";
                    if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                        // line 71
                        echo "          <div class=\"live-course-lesson mbm\">
            <span class=\"text-success fsm mrm\">";
                        // line 72
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), $this->env->getExtension('translator')->trans("n月j日 H:i")), "html", null, true);
                        echo " ~ ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), $this->env->getExtension('translator')->trans("n月j日 H:i")), "html", null, true);
                        echo "</span>
            <span class=\"text-muted fsm mrm\">";
                        // line 73
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("第%number%课时", array("%number%" => $this->getAttribute((isset($context["lessom"]) ? $context["lessom"] : null), "number", array()))), "html", null, true);
                        echo "</span>
          </div>
        ";
                    }
                    // line 76
                    echo "      ";
                } else {
                    // line 77
                    echo "        <div class=\"course-about ellipsis\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                    echo "</div>
      ";
                }
                // line 79
                echo "
      <div class=\"course-footer clearfix\">
        ";
                // line 81
                $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                // line 82
                echo "        ";
                if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                    // line 83
                    echo "          <div class=\"teacher\">
            <a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "smallAvatar", array()), "course.png"), "html", null, true);
                    echo "\" class=\"teacher-avatar\"></a>
            <a class=\"teacher-nickname ellipsis\" target=\"_blank\"  href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                    echo "</a>
            <span class=\"teacher-title ellipsis\">";
                    // line 86
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
                    echo "</span>
          </div>
        ";
                }
                // line 89
                echo "
        <div class=\"course-metas-";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\" style=\"display:none;\">
          <span class=\"glyphicon glyphicon-ok pull-right\" style=\"z-index:100;color:#02b980;font-size:30px;\"></span>
        </div>

      </div>
    </div>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "  ";
        } else {
            // line 99
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("找不到相关课程！"), "html", null, true);
            echo "</div>
  ";
        }
        // line 101
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:course-select-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 101,  265 => 99,  262 => 98,  248 => 90,  245 => 89,  239 => 86,  233 => 85,  227 => 84,  224 => 83,  221 => 82,  219 => 81,  215 => 79,  209 => 77,  206 => 76,  200 => 73,  194 => 72,  191 => 71,  188 => 70,  185 => 69,  183 => 68,  179 => 66,  176 => 65,  170 => 63,  164 => 61,  161 => 60,  158 => 59,  156 => 58,  153 => 57,  147 => 55,  145 => 54,  140 => 53,  138 => 52,  132 => 51,  127 => 48,  120 => 46,  117 => 45,  115 => 44,  112 => 43,  108 => 41,  102 => 39,  96 => 37,  94 => 36,  91 => 35,  87 => 33,  81 => 31,  72 => 29,  70 => 28,  67 => 27,  65 => 26,  56 => 22,  52 => 21,  48 => 20,  45 => 19,  40 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }
}
