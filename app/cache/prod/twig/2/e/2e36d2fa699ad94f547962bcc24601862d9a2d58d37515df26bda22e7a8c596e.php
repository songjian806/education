<?php

/* TopxiaWebBundle:Coin:cash_bill.html.twig */
class __TwigTemplate_2e36d2fa699ad94f547962bcc24601862d9a2d58d37515df26bda22e7a8c596e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Coin:layout.html.twig", "TopxiaWebBundle:Coin:cash_bill.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Coin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的现金账单"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"es-section h400\">
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Coin:bill-bar.html.twig", "TopxiaWebBundle:Coin:cash_bill.html.twig", 9)->display($context);
        // line 10
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
        ";
        // line 14
        $context["options"] = array("" => $this->env->getExtension('translator')->trans("全部记录"), "oneWeek" => $this->env->getExtension('translator')->trans("最近一周"), "twoWeeks" => $this->env->getExtension('translator')->trans("最近两周"), "oneMonth" => $this->env->getExtension('translator')->trans("最近一个月"), "twoMonths" => $this->env->getExtension('translator')->trans("最近两个月"), "threeMonths" => $this->env->getExtension('translator')->trans("最近三个月"));
        // line 15
        echo "        ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
      </select>
    </div>

    ";
        // line 20
        echo "     <div class=\"control-label pull-right\" style=\"padding-top: 8px;\">
      ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收入："), "html", null, true);
        echo "<span style=\"color:#1bb974;\">";
        echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : null), "html", null, true);
        echo "</span>&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支出："), "html", null, true);
        echo "<span style=\"color:#ff7b0e;\">";
        echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : null), "html", null, true);
        echo "</span>&nbsp;";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
        echo "
      </div>
  </form>
  <br>
  <div class=\"table-responsive\">
    <table class=\"table table-striped\">
      ";
        // line 28
        if ((isset($context["cashes"]) ? $context["cashes"] : null)) {
            // line 29
            echo "        <tr>
          <th><span class=\"text-sm\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("流水号"), "html", null, true);
            echo "</span></th>
          <th><span class=\"text-sm\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
            echo "</span></th>
          <th><span class=\"text-sm\">";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("成交时间"), "html", null, true);
            echo "</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收支"), "html", null, true);
            echo "</span></th>
          <th><span class=\"text-sm\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付方式"), "html", null, true);
            echo "</span></th>
        </tr>
        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 37
                echo "          <tr>
            <td><span class=\"text-sm\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("订单号："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 43
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 44
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "
            </td>
            ";
                }
                // line 48
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 49
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "
            </td>
            ";
                }
                // line 53
                echo "
            <td>
              <span class=\"text-sm\">
                ";
                // line 56
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 57
                    echo "                  ";
                    echo $this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["cash"], "payment", array()));
                    echo "
                ";
                } else {
                    // line 59
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网校支付"), "html", null, true);
                    echo "
                ";
                }
                // line 61
                echo "              </span>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      ";
        } else {
            // line 66
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无记录"), "html", null, true);
            echo "</div>
      ";
        }
        // line 68
        echo "    </table>
  </div>
  <nav class=\"text-center\">
    ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:cash_bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 71,  199 => 68,  193 => 66,  190 => 65,  181 => 61,  175 => 59,  169 => 57,  167 => 56,  162 => 53,  156 => 50,  153 => 49,  150 => 48,  144 => 45,  141 => 44,  139 => 43,  134 => 41,  129 => 40,  125 => 39,  121 => 38,  118 => 37,  114 => 36,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  90 => 29,  88 => 28,  75 => 22,  67 => 21,  64 => 20,  56 => 15,  54 => 14,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
