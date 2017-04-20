<?php

/* ClassroomBundle:Classroom:sign.html.twig */
class __TwigTemplate_6facab3450362ec86a0d1bd7d36d0795950e325019c4b53e09c35cb4cdbb2836 extends Twig_Template
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
        echo "<div class=\"panel panel-default class-signin\">
  <div class=\"panel-body\">
    <div id=\"classroom-sign\"  data-records=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_signed_records", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" data-signurl=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_sign", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" >
      <i class=\"es-icon es-icon-today\"></i>
      ";
        // line 5
        if ( !(isset($context["isSignedToday"]) ? $context["isSignedToday"] : null)) {
            // line 6
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method") == "en_US")) {
                // line 7
                echo "              <span class=\"date\">
            ";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M"), "html", null, true);
                echo "
          </span>
          ";
            } else {
                // line 11
                echo "              <span class=\"date\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("月"), "html", null, true);
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("日"), "html", null, true);
                echo "</span>
          ";
            }
            // line 13
            echo "        <!-- <br> -->
        <!-- 星期";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["week"]) ? $context["week"] : null), "html", null, true);
            echo " -->
      ";
        } else {
            // line 16
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getLocale", array(), "method") == "en_US")) {
                // line 17
                echo "              <span class=\"date\">
            ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "M"), "html", null, true);
                echo "
          </span>
          ";
            } else {
                // line 21
                echo "              <span class=\"date\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("月"), "html", null, true);
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d"), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("日"), "html", null, true);
                echo "</span>
          ";
            }
            // line 23
            echo "        <!-- <br>漏签<span style=\"color:red;\">";
            echo twig_escape_filter($this->env, (isset($context["notSign"]) ? $context["notSign"] : null), "html", null, true);
            echo "</span>天 -->
      ";
        }
        // line 25
        echo "      <div id=\"sign\">
        ";
        // line 26
        if ( !(isset($context["isSignedToday"]) ? $context["isSignedToday"] : null)) {
            // line 27
            echo "          <div class=\"sign-area\"  data-role=\"sign\">
            <a class=\"btn-signin\" href=\"javascript:;\">
              ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("签到"), "html", null, true);
            echo "
            </a>
          </div>
        ";
        } else {
            // line 33
            echo "          <div class=\"sign-area\" data-role=\"signed\" onclick=\"return false;\" >
            <a class=\"btn-signin after\" >";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已签到"), "html", null, true);
            echo "
            <br>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连续%keepDays%天", array("%keepDays%" => $this->getAttribute((isset($context["userSignStatistics"]) ? $context["userSignStatistics"] : null), "keepDays", array()))), "html", null, true);
            echo "</a>
          </div>
        ";
        }
        // line 38
        echo "      </div>
      <div class=\"sign_main\" style=\"display:none\">
        <div class=\"\">
          <div class=\"calendar_title_month clearfix\">
            <span class=\"pull-left glyphicon glyphicon-chevron-left title-margin\" data-role=\"previous\"></span>
            <span class=\"pull-right glyphicon glyphicon-chevron-right title-margin disabled-next\" data-role=\"next\"></span>
            <div class=\"text-center title-month title-margin\" data-time=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y/m"), "html", null, true);
        echo "\" id=\"title-month\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m"), "html", null, true);
        echo "
            </div>
          </div>
          
          <table class=\"sign_succ_table \">
            <thead align=\"center\">
              <tr class=\"sign_succ_canlerdar_head\">
                <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("日"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("一"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("三"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("四"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("五"), "html", null, true);
        echo "</td><td>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("六"), "html", null, true);
        echo "</td>
              </tr>
            </thead>
            <tbody align=\"center\" class=\"sign_succ_canlerdar_days j_canlerdar_days\">
            </tbody>
          </table>
        </div>
        <div class=\"sign_tip_boards\">
          <div class=\"mlm mtm\">
            <p class=\" text-muted\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("签到排名：今日第"), "html", null, true);
        echo "<span class=\"today-rank\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("个签到"), "html", null, true);
        echo "</p>
          </div>
          <div class=\"mlm\">
            <p class=\" text-muted\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("今日签到人数："), "html", null, true);
        echo "<span class=\"signed-number\"></span></p>
          </div>
          <div class=\"mlm\">
            <p class=\" text-muted\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连续签到："), "html", null, true);
        echo "<span class=\"keep-days\"></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("天"), "html", null, true);
        echo "</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:sign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 66,  173 => 63,  165 => 60,  141 => 51,  129 => 44,  121 => 38,  115 => 35,  111 => 34,  108 => 33,  101 => 29,  97 => 27,  95 => 26,  92 => 25,  86 => 23,  77 => 21,  69 => 18,  66 => 17,  63 => 16,  58 => 14,  55 => 13,  46 => 11,  38 => 8,  35 => 7,  32 => 6,  30 => 5,  23 => 3,  19 => 1,);
    }
}
