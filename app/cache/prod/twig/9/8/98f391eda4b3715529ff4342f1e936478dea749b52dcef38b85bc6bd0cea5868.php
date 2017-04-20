<?php

/* TopxiaWebBundle:CourseManage:price.html.twig */
class __TwigTemplate_98f391eda4b3715529ff4342f1e936478dea749b52dcef38b85bc6bd0cea5868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:price.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "price";
        // line 6
        $context["script_controller"] = "course-manage/price";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格设置"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

    ";
        // line 14
        $context["currency"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 15
        echo "    ";
        $context["coinRate"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate", 1);
        // line 16
        echo "
    ";
        // line 17
        if ((isset($context["canModifyPrice"]) ? $context["canModifyPrice"] : null)) {
            // line 18
            echo "      <form class=\"form-horizontal\" id=\"price-form\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-cashrate=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate", 1), "html", null, true);
            echo "\">
        ";
            // line 19
            if (((isset($context["currency"]) ? $context["currency"] : null) == "coin")) {
                // line 20
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%coin_name%价格", array("%coin_name%" => $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"))), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"price\" class=\"form-control course-current-price\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                echo "\">
              ";
                // line 24
                if ((isset($context["discount"]) ? $context["discount"] : null)) {
                    // line 25
                    echo "                <div class=\"alert alert-warning\">
                  <small>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前课程正处于「 %name% 」打折活动中。", array("%name%" => $this->getAttribute((isset($context["discount"]) ? $context["discount"] : null), "name", array()))), "html", null, true);
                    echo "
                  ";
                    // line 27
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折扣"), "html", null, true);
                    echo "： <strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%discount%折", array("%discount%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()))), "html", null, true);
                    echo " </strong>，
                  ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折后价"), "html", null, true);
                    echo "：<strong> <span class=\"course-discount-price\" data-discount=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</strong>。</small>
                </div>
              ";
                }
                // line 31
                echo "            </div>
          </div>
        ";
            } else {
                // line 34
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"price\" class=\"form-control course-current-price\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                echo "\">
              <div class=\"help-block\">
              </div>
              ";
                // line 40
                if ((isset($context["discount"]) ? $context["discount"] : null)) {
                    // line 41
                    echo "                <div class=\"alert alert-warning\">
                  ";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前课程正处于「 %name% 」打折活动中。", array("%name%" => $this->getAttribute((isset($context["discount"]) ? $context["discount"] : null), "name", array()))), "html", null, true);
                    echo "<br>
                  ";
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折扣"), "html", null, true);
                    echo "： <strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%discount%折", array("%discount%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()))), "html", null, true);
                    echo " </strong>，
                  ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("折后价"), "html", null, true);
                    echo "：<strong><span class=\"course-discount-price\" data-discount=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
                    echo "</strong>。
                </div>
              ";
                }
                // line 47
                echo "            </div>
          </div>
        ";
            }
            // line 50
            echo "
        <div class=\"form-group\">
          <label class=\"col-md-2 control-label\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买截止日期"), "html", null, true);
            echo "</label>
          <div class=\"col-md-8 controls radios\">
            ";
            // line 54
            echo $this->env->getExtension('topxia_html_twig')->radios("enableBuyExpiryTime", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), 0)) : (0)) > 0));
            echo "
          </div>
        </div>

        <div class=\"form-group ";
            // line 58
            if ( !$this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array())) {
                echo "hide";
            }
            echo "\" id=\"buyExpiryTime\">
          <div class=\"col-md-8 controls col-md-offset-2\">
            <input type=\"text\" class=\"form-control width-input width-input-large\" name=\"buyExpiryTime\" ";
            // line 60
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array())) {
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyExpiryTime", array()), "Y-m-d"), "html", null, true);
                echo "\" ";
            }
            echo ">
          </div>
        </div>

        ";
            // line 64
            if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip") && $this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled"))) {
                // line 65
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员课程设置"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
              <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
                ";
                // line 69
                echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "vipLevelId", array()), $this->env->getExtension('translator')->trans("无"));
                echo "
              </select>
              <div class=\"help-block\">";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置会员课程后，该会员及更高等级会员，可免费学习。"), "html", null, true);
                echo "</div>
            </div>
          </div>
        ";
            }
            // line 75
            echo "
        ";
            // line 76
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud")) {
                // line 77
                echo "        <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启视频试看"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls radios\">
              ";
                // line 80
                echo $this->env->getExtension('topxia_html_twig')->radios("tryLookable", array(1 => $this->env->getExtension('translator')->trans("是"), 0 => $this->env->getExtension('translator')->trans("否")), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()), 0)) : (0)));
                echo "
              <div class=\"help-block\">";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("视频试看功能仅云视频支持"), "html", null, true);
                echo "</div>
            </div>
        </div>

        <div class=\"form-group ";
                // line 85
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()), 0)) : (0)) != 1)) {
                    echo "hide";
                }
                echo "\" id = \"tryLookTimeGroup\">
            <label class=\"col-md-2 control-label\">";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试看时长"), "html", null, true);
                echo "</label>
            <div class=\"col-md-8 controls\">
               <select name=\"tryLookTime\" class='form-control width-input width-input-large'>
                ";
                // line 89
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["minute"]) {
                    // line 90
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $context["minute"], "html", null, true);
                    echo "\" ";
                    if (($context["minute"] == $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookTime", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["minute"], "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分钟"), "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "               </select>
              <div class=\"help-block\"></div>
            </div>
        </div>
        ";
            }
            // line 97
            echo "
        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"price-save-btn\" type=\"submit\">";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
          </div>
        </div>

      </form>
    ";
        } else {
            // line 107
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("抱歉，您无权设置课程价格，如有需要请联系网站管理员！"), "html", null, true);
            echo "</div>
    ";
        }
        // line 109
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 109,  306 => 107,  297 => 101,  293 => 100,  288 => 97,  281 => 92,  265 => 90,  261 => 89,  255 => 86,  249 => 85,  242 => 81,  238 => 80,  233 => 78,  230 => 77,  228 => 76,  225 => 75,  218 => 71,  213 => 69,  207 => 66,  204 => 65,  202 => 64,  191 => 60,  184 => 58,  177 => 54,  172 => 52,  168 => 50,  163 => 47,  151 => 44,  145 => 43,  141 => 42,  138 => 41,  136 => 40,  130 => 37,  125 => 35,  122 => 34,  117 => 31,  105 => 28,  99 => 27,  95 => 26,  92 => 25,  90 => 24,  86 => 23,  81 => 21,  78 => 20,  76 => 19,  69 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  54 => 12,  49 => 10,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
