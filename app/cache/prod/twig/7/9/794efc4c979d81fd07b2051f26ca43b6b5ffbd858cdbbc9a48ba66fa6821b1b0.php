<?php

/* TopxiaWebBundle:Card:index.html.twig */
class __TwigTemplate_794efc4c979d81fd07b2051f26ca43b6b5ffbd858cdbbc9a48ba66fa6821b1b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Card:layout.html.twig", "TopxiaWebBundle:Card:index.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Card:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["main_nav"] = "cards";
        // line 4
        $context["script_controller"] = "topxiawebbundle/controller/card/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main_body($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 8
            echo "    <a href=\"#modal\" class=\"receive-modal hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" ><span class=\"\"></span></a>
  ";
        }
        // line 10
        echo "  <div class=\"clearfix mbl\">
    <ul class=\"nav nav-pills inline-block\">
      <li role=\"presentation\" ";
        // line 12
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "coupon"))) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => ""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优惠券"), "html", null, true);
        echo "</a></li>
    ";
        // line 13
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard")) {
            // line 14
            echo "      <li role=\"presentation\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "moneyCard")) {
                echo " class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => "moneyCard"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习卡"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 16
        echo "    </ul>

    <div class=\"pull-right btn-group\">
    ";
        // line 19
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard")) {
            // line 20
            echo "        <a role=\"filter-change\" class=\"btn btn-default ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "all"))) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
            echo "</a>
        <a role=\"filter-change\" class=\"btn btn-default ";
            // line 21
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "useable")) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "useable")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未使用"), "html", null, true);
            echo "</a>
        <a role=\"filter-change\" class=\"btn btn-default ";
            // line 22
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "used")) {
                // line 23
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "used")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已使用"), "html", null, true);
            echo "</a>
        <a role=\"filter-change\" class=\"btn btn-default ";
            // line 24
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "outdate")) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "outdate")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已过期"), "html", null, true);
            echo "</a>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "moneyCard"))) {
            // line 28
            echo "        <a role=\"filter-change\" class=\"btn btn-default ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "invalid")) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "invalid")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已作废"), "html", null, true);
            echo "</a>
      ";
        }
        // line 30
        echo "    </div>
  </div>
  <div class=\"card-pack-list\">
    <div class=\"row\">
      ";
        // line 34
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") != "moneyCard"))) {
            // line 35
            echo "        ";
            if ( !(null === (isset($context["cards"]) ? $context["cards"] : null))) {
                // line 36
                echo "          ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) ? $context["cards"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 37
                    echo "            <div class=\"col-lg-4 col-md-6 col-sm-6\">
              ";
                    // line 38
                    if ($this->getAttribute((isset($context["cardDetails"]) ? $context["cardDetails"] : null), $this->getAttribute($context["card"], "cardId", array()), array(), "array", true, true)) {
                        // line 39
                        echo "                ";
                        if (($this->getAttribute($context["card"], "cardType", array()) == "coupon")) {
                            // line 40
                            echo "                  ";
                            $this->loadTemplate((("TopxiaWebBundle:Card:coupon-" . $this->getAttribute($context["card"], "status", array())) . ".html.twig"), "TopxiaWebBundle:Card:index.html.twig", 40)->display(array_merge($context, array("cardDetail" => $this->getAttribute((isset($context["cardDetails"]) ? $context["cardDetails"] : null), $this->getAttribute($context["card"], "cardId", array()), array(), "array"))));
                            // line 41
                            echo "                ";
                        } elseif ((($this->getAttribute($context["card"], "cardType", array()) == "moneyCard") && $this->env->getExtension('topxia_web_twig')->isPluginInstalled("moneyCard"))) {
                            // line 42
                            echo "                  ";
                            $this->loadTemplate((("TopxiaWebBundle:Card:moneycard-" . $this->getAttribute($context["card"], "status", array())) . ".html.twig"), "TopxiaWebBundle:Card:index.html.twig", 42)->display(array_merge($context, array("cardDetail" => $this->getAttribute((isset($context["cardDetails"]) ? $context["cardDetails"] : null), $this->getAttribute($context["card"], "cardId", array()), array(), "array"))));
                            // line 43
                            echo "                ";
                        }
                        // line 44
                        echo "              ";
                    }
                    // line 45
                    echo "            </div>
          ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "        ";
            } else {
                // line 48
                echo "        <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("没有搜索到符合条件的"), "html", null, true);
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "coupon"))) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("优惠券"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习卡"), "html", null, true);
                }
                echo "</div>
        ";
            }
            // line 50
            echo "      ";
        } else {
            // line 51
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("网站没有开启%coin_name%功能,学习卡功能暂时没法使用", array("%coin_name%" => (($this->getAttribute((isset($context["coin"]) ? $context["coin"] : null), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coin"]) ? $context["coin"] : null), "coin_name", array()), $this->env->getExtension('translator')->trans("虚拟币"))) : ($this->env->getExtension('translator')->trans("虚拟币"))))), "html", null, true);
            echo "</div>
      ";
        }
        // line 53
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 53,  224 => 51,  221 => 50,  210 => 48,  207 => 47,  192 => 45,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  177 => 40,  174 => 39,  172 => 38,  169 => 37,  151 => 36,  148 => 35,  146 => 34,  140 => 30,  128 => 28,  126 => 27,  123 => 26,  112 => 24,  103 => 23,  101 => 22,  91 => 21,  80 => 20,  78 => 19,  73 => 16,  61 => 14,  59 => 13,  49 => 12,  45 => 10,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
