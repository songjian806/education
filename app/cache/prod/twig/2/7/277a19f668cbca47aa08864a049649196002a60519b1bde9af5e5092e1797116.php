<?php

/* TopxiaAdminBundle:Coin:cash-bill.html.twig */
class __TwigTemplate_277a19f668cbca47aa08864a049649196002a60519b1bde9af5e5092e1797116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:cash-bill.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
          ";
        // line 10
        $context["options"] = array("" => $this->env->getExtension('translator')->trans("全部记录"), "oneWeek" => $this->env->getExtension('translator')->trans("最近一周"), "twoWeeks" => $this->env->getExtension('translator')->trans("最近两周"), "oneMonth" => $this->env->getExtension('translator')->trans("最近一个月"), "twoMonths" => $this->env->getExtension('translator')->trans("最近两个月"), "threeMonths" => $this->env->getExtension('translator')->trans("最近三个月"));
        // line 11
        echo "          ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
        </select>
      </div>
    <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>
    <a class=\"btn btn-primary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_bill_export_csv", array("lastHowManyMonths" => $this->getAttribute($this->getAttribute(        // line 20
(isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"), "cashType" =>         // line 21
(isset($context["cashType"]) ? $context["cashType"] : null), "nickname" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 22
(isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"))), "html", null, true);
        // line 23
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("导出结果"), "html", null, true);
        echo "</a>

    </form>

    <p class=\"text-muted\">
      <span class=\"mrl\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收入："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
        echo "</span>
      <span class=\"mrl\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支出："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : null), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
        echo "</span>
    </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 34
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 35
            echo "        <tr>
          <th><span class=\"text-sm\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("流水号"), "html", null, true);
            echo "</span></th>
          <th><span class=\"text-sm\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
            echo "</span></th>  
          <th><span class=\"text-sm\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
            echo "</span></th>             
          <th><span class=\"text-sm\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("成交时间"), "html", null, true);
            echo "</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收支"), "html", null, true);
            echo "</span></th>
          
          <th><span class=\"text-sm\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
            echo "</span></th>
        </tr>
        ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 45
                echo "           <tr>
            <td><span class=\"text-sm\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单号："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\"><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["cash"], "userId", array()))), "html", null, true);
                echo "\">
            ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["cash"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a></span></td>            
            <td><span class=\"text-sm\">";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 53
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 54
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 58
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 59
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 63
                echo "           
            <td>
              <span class=\"text-sm\">
                ";
                // line 66
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 67
                    echo "                  ";
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["cash"], "payment", array()));
                    echo "
                ";
                } else {
                    // line 69
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网校支付"), "html", null, true);
                    echo "
                ";
                }
                // line 71
                echo "              </span>
            </td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无记录"), "html", null, true);
            echo "</div>
        ";
        }
        // line 78
        echo "      </table>
    </div>
 ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:cash-bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 80,  220 => 78,  214 => 76,  211 => 75,  202 => 71,  196 => 69,  190 => 67,  188 => 66,  183 => 63,  177 => 60,  174 => 59,  171 => 58,  165 => 55,  162 => 54,  160 => 53,  155 => 51,  151 => 50,  147 => 49,  142 => 48,  138 => 47,  134 => 46,  131 => 45,  127 => 44,  122 => 42,  117 => 40,  113 => 39,  109 => 38,  105 => 37,  101 => 36,  98 => 35,  96 => 34,  84 => 29,  76 => 28,  67 => 23,  65 => 22,  64 => 21,  63 => 20,  62 => 19,  58 => 18,  50 => 15,  42 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
