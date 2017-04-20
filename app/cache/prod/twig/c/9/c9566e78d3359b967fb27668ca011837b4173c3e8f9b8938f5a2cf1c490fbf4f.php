<?php

/* ClassroomBundle:Classroom:classroom-header.html.twig */
class __TwigTemplate_c9566e78d3359b967fb27668ca011837b4173c3e8f9b8938f5a2cf1c490fbf4f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 1);
        // line 2
        echo "
<section class=\"class-header before\">
  <div class=\"container\">
    ";
        // line 5
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 6
            echo "      <div class=\"alert alert-warning\">
        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您的退款申请已提交，请等待管理员的处理。"), "html", null, true);
            echo "
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消退款，继续学习！"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 11
        echo "
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
      ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>
    
    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
          ";
        // line 27
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 28
            echo "            <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
          ";
        }
        // line 30
        echo "        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 45
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
        echo ")</span>
            </div>
            <div class=\"price\">
              ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
        echo " 
              <span>
                ";
        // line 51
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 52
            echo "                    ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                // line 53
                echo "                   ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                    ";
            } else {
                // line 55
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                echo "
                    ";
            }
            // line 57
            echo "                ";
        } else {
            // line 58
            echo "                  ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                // line 59
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                echo "
                  ";
            } else {
                // line 61
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                echo "
                  ";
            }
            // line 63
            echo "                ";
        }
        // line 64
        echo "              </span>
            </div>
          </div>
          <ul class=\"class-data hidden-sm clearfix ";
        // line 67
        if ((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) {
            echo "active";
        }
        echo "\">
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <p><i class=\"es-icon es-icon-book\"></i></p>
              <p>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
        echo "</p>
                </a>
                ";
        // line 82
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 82)->display(array_merge($context, array("type" => "classroom")));
        // line 83
        echo "              </span>
            </li>
          ";
        // line 85
        if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()))) {
            // line 86
            echo "            <li class=\"hidden-xs color-warning icon-vip\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 86)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null))));
            echo "\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "\">
              <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 88
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 88)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null))));
            // line 89
            echo "            </li>
          ";
        }
        // line 91
        echo "          </ul>

          <div class=\"bottom-metas clearfix\">
            <div class=\"class-serve hidden-sm hidden-xs\">
              <div class=\"serve-frame\">
                ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("承诺服务"), "html", null, true);
        echo "
              </div>
              ";
        // line 98
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 98)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 99
        echo "            </div>

            ";
        // line 101
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
            // line 102
            echo "              <div class=\"btn-buy\">
                ";
            // line 103
            $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 103)->display($context);
            // line 104
            echo "                
              </div>
            ";
        }
        // line 107
        echo "            
          </div>
        </div>

      ";
        // line 111
        if (($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage") && $this->env->getExtension('permission.permission_extension')->hasPermission("admin_classroom_content_manage"))) {
            // line 112
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 116
        echo "
      </div>
    </div>
  </div>
</section>            

";
        // line 122
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 123
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
        // line 124
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 124,  308 => 123,  306 => 122,  298 => 116,  288 => 112,  286 => 111,  280 => 107,  275 => 104,  273 => 103,  270 => 102,  268 => 101,  264 => 99,  262 => 98,  257 => 96,  250 => 91,  246 => 89,  244 => 88,  232 => 86,  230 => 85,  226 => 83,  224 => 82,  219 => 80,  208 => 74,  199 => 70,  191 => 67,  186 => 64,  183 => 63,  177 => 61,  170 => 59,  167 => 58,  164 => 57,  158 => 55,  150 => 53,  147 => 52,  145 => 51,  140 => 49,  133 => 46,  129 => 45,  120 => 39,  116 => 38,  109 => 34,  105 => 33,  100 => 30,  94 => 28,  92 => 27,  83 => 25,  79 => 24,  68 => 17,  57 => 15,  53 => 14,  47 => 13,  43 => 11,  35 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
