<?php

/* ClassroomBundle:Classroom:classroom-join-header.html.twig */
class __TwigTemplate_064ec8d617d65d27f027b5910aff4e37501850047551e2750c661ae309f227cf extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 1);
        // line 2
        echo "<section class=\"class-header after ";
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            echo " auditor";
        }
        echo "\">
  <div class=\"container\">
    ";
        // line 4
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 5
            echo "      <div class=\"alert alert-warning\">
        您的退款申请已提交，请等待管理员的处理。
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
      </div>
    ";
        }
        // line 10
        echo "    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("首页"), "html", null, true);
        echo "</a></li>
      ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>

    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("扫二维码继续学习"), "html", null, true);
        echo "
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("二维码时效为半小时"), "html", null, true);
        echo "
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 40
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("评价"), "html", null, true);
        echo ")</span>
            </div>
            ";
        // line 43
        if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "auditor")) {
            // line 44
            echo "              <div class=\"price\">
                ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格："), "html", null, true);
            echo " <span>";
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 46
                echo "                      ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 47
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 49
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                    echo "
                      ";
                }
                // line 51
                echo "                  ";
            } else {
                // line 52
                echo "                    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 53
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "
                    ";
                } else {
                    // line 55
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                    echo "
                    ";
                }
                // line 57
                echo "                  ";
            }
            echo "</span>
              </div>
            ";
        }
        // line 60
        echo "          </div>
          <div class=\"class-serve hidden-sm hidden-xs\">
            <div class=\"serve-frame\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("承诺服务"), "html", null, true);
        echo "
            </div>
            ";
        // line 65
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 65)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 66
        echo "          </div>
        </div>
        <div class=\"class-operation\">
          <ul class='class-data clearfix ";
        // line 69
        if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null) && twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())))) {
            echo "hidden-sm";
        } else {
            echo "two-col";
        }
        echo "'>
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
        echo "(";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
        echo "</p>
                </a>
                ";
        // line 80
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 80)->display(array_merge($context, array("type" => "classroom")));
        echo " 
              </span>
            </li>
            ";
        // line 83
        if (((twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()))) {
            // line 84
            echo "              <li class=\"hidden-xs color-warning icon-vip\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 84)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null))));
            echo "\" data-original-title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 86
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 86)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null))));
            // line 87
            echo "              </li>
            ";
        }
        // line 89
        echo "          </ul>
          ";
        // line 90
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 91
            echo "            <div class=\"class-auditor hidden-sm\">
              ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您现在是"), "html", null, true);
            echo "<span class=\"color-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("旁听生"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("，不能完整学习"), "html", null, true);
            echo "<i class=\"es-icon es-icon-help color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务"), "html", null, true);
            echo "\"></i><br>
              
              ";
            // line 94
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
                // line 95
                echo "                <div class=\"btn-buy\">
                  ";
                // line 96
                $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 96)->display(array_merge($context, array("isAuditor" => true)));
                // line 97
                echo "                </div>
              ";
            }
            // line 99
            echo "              
            </div>
          ";
        }
        // line 102
        echo "        </div>

      ";
        // line 104
        if (($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage") && $this->env->getExtension('permission.permission_extension')->hasPermission("admin_classroom_content_manage"))) {
            // line 105
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute(        // line 108
(isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Handle")) {
            // line 109
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\" class=\"btn btn-default setting hidden-xs hidden-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%管理", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 113
        echo "      ";
        if ((($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false))) &&  !$this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()))) {
            // line 114
            echo "        ";
            if (!twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
                echo "  
          <a type=\"button\" 
            ";
                // line 116
                if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()) > 0))) {
                    // line 117
                    echo "            class=\"btn btn-default setting hidden-xs hidden-sm\"
            href=\"#modal\" 
            data-toggle=\"modal\" 
            data-url=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
            ";
                } else {
                    // line 122
                    echo "            class=\"btn btn-default setting hidden-xs hidden-sm\"
            href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" id =\"quit\" 
            ";
                }
                // line 125
                echo "            >
            <i class=\"es-icon es-icon-exit\"></i>
          </a>
        ";
            }
            // line 129
            echo "      ";
        }
        // line 130
        echo "      </div>
    </div>
  </div>
</section>

";
        // line 135
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 136
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-join-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 136,  352 => 135,  345 => 130,  342 => 129,  336 => 125,  331 => 123,  328 => 122,  323 => 120,  318 => 117,  316 => 116,  310 => 114,  307 => 113,  297 => 109,  295 => 108,  286 => 105,  284 => 104,  280 => 102,  275 => 99,  271 => 97,  269 => 96,  266 => 95,  264 => 94,  253 => 92,  250 => 91,  248 => 90,  245 => 89,  241 => 87,  239 => 86,  229 => 84,  227 => 83,  221 => 80,  216 => 78,  205 => 72,  195 => 69,  190 => 66,  188 => 65,  183 => 63,  178 => 60,  171 => 57,  165 => 55,  158 => 53,  155 => 52,  152 => 51,  146 => 49,  138 => 47,  135 => 46,  131 => 45,  128 => 44,  126 => 43,  120 => 41,  116 => 40,  107 => 34,  103 => 33,  96 => 29,  92 => 28,  80 => 23,  76 => 22,  65 => 15,  54 => 13,  50 => 12,  44 => 11,  41 => 10,  35 => 7,  31 => 5,  29 => 4,  21 => 2,  19 => 1,);
    }
}
