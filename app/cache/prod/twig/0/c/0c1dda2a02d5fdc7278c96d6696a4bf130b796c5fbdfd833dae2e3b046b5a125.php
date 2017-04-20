<?php

/* TopxiaWebBundle:Order:order-table.html.twig */
class __TwigTemplate_0c1dda2a02d5fdc7278c96d6696a4bf130b796c5fbdfd833dae2e3b046b5a125 extends Twig_Template
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
        // line 7
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 7);
        // line 8
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "my"))) : (array(0 => "my")));
        // line 11
        echo "  <thead>
    <tr>
      <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("实付(元)"), "html", null, true);
        echo "</th>
      ";
        // line 17
        if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "course", 1 => "admin"))) {
            // line 18
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买者"), "html", null, true);
            echo "</th>
      ";
        }
        // line 20
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
        echo "</th>
      <th style=\"min-width:100px\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 26
            echo "      ";
            $context["buyer"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"), null)) : (null));
            // line 27
            echo "        <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            ";
            // line 29
            if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                // line 30
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 31
$context["order"], "targetType", array()) == "vip")) {
                // line 32
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 33
$context["order"], "targetType", array()) == "classroom")) {
                // line 34
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 36
                echo "              <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 38
            echo "            <br>
            <span class=\"text-muted text-sm\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单号：%sn%", array("%sn%" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
            echo "</span>
          </td>
          <td><span class=\"text-muted text-sm\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span></td>
          <td>";
            // line 42
            echo $context["dict_macro"]->getorderStatus($this->getAttribute($context["order"], "status", array()));
            echo "</td>
          <td><span class=\"money-text\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
            echo "</span></td>
          ";
            // line 44
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : null), array(0 => "admin", 1 => "course"))) {
                // line 45
                echo "            <td>
              ";
                // line 46
                echo $context["web_macro"]->getuser_link((isset($context["buyer"]) ? $context["buyer"] : null));
                echo "
            </td>
          ";
            }
            // line 49
            echo "          <td>
            ";
            // line 50
            if (($this->getAttribute($context["order"], "paidTime", array()) > 0)) {
                // line 51
                echo "              ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "
              <br>
              <span class=\"text-muted text-sm\">";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 55
                echo "              --
            ";
            }
            // line 57
            echo "          </td>
          <td>
            ";
            // line 59
            if (("admin" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 60
                echo "                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
              ";
            }
            // line 62
            echo "            ";
            if (("course" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 63
                echo "            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
            ";
            }
            // line 65
            echo "
            ";
            // line 66
            if (("my" == (isset($context["mode"]) ? $context["mode"] : null))) {
                // line 67
                echo "              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
                echo "</a>
                ";
                // line 69
                if ((($this->getAttribute($context["order"], "status", array()) == "refunding") || ($this->getAttribute($context["order"], "status", array()) == "created"))) {
                    // line 70
                    echo "                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right ";
                    // line 73
                    echo "\" style=\"min-width: 120px;\" >

                  ";
                    // line 76
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "refunding")) {
                        // line 77
                        echo "                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消退款"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 79
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "created")) {
                        // line 80
                        echo "
                      <li>
                        <a href=\"";
                        // line 82
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pay_center_show", array("sn" => $this->getAttribute($context["order"], "sn", array()), "targetType" => $this->getAttribute($context["order"], "targetType", array()))), "html", null, true);
                        echo "\"  style=\"display:block\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("去支付"), "html", null, true);
                        echo "</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"";
                        // line 84
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_order_cancel", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消订单"), "html", null, true);
                        echo "</a></li>

                    ";
                    }
                    // line 87
                    echo "                   ";
                    // line 88
                    echo "                  </ul>
                ";
                }
                // line 90
                echo "              </div>
            ";
            }
            // line 92
            echo "          </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无订单记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "  </tbody>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 97,  267 => 95,  260 => 92,  256 => 90,  252 => 88,  250 => 87,  242 => 84,  235 => 82,  231 => 80,  228 => 79,  220 => 77,  217 => 76,  213 => 73,  208 => 70,  206 => 69,  200 => 68,  197 => 67,  195 => 66,  192 => 65,  184 => 63,  181 => 62,  173 => 60,  171 => 59,  167 => 57,  163 => 55,  158 => 53,  152 => 51,  150 => 50,  147 => 49,  141 => 46,  138 => 45,  136 => 44,  132 => 43,  128 => 42,  124 => 41,  119 => 39,  116 => 38,  110 => 36,  102 => 34,  100 => 33,  93 => 32,  91 => 31,  84 => 30,  82 => 29,  76 => 27,  73 => 26,  68 => 25,  61 => 21,  56 => 20,  50 => 18,  48 => 17,  44 => 16,  40 => 15,  36 => 14,  32 => 13,  28 => 11,  26 => 10,  23 => 9,  21 => 8,  19 => 7,);
    }
}
