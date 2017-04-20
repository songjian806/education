<?php

/* TopxiaWebBundle:Course:Widget/course-price.html.twig */
class __TwigTemplate_a75e7145ada954da13a1bdc540b12fc3c1b32f5833e092c5fac736c6d36d5f78 extends Twig_Template
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
        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter((isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">

  ";
        // line 14
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountId", array())) {
            // line 15
            echo "
    ";
            // line 16
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 17
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 18
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 20
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%price%元", array("%price%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()))), "html", null, true);
                    echo "</span>
      ";
                }
                // line 22
                echo "    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 25
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 26
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 28
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%originPrice%元", array("%originPrice%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()))), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 33
                echo "
      <span class=\"discount\">
        ";
                // line 35
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0)))) {
                    // line 36
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 38
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%discount%折", array("%discount%" => twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()), 2, "common"))), "html", null, true);
                    echo "
        ";
                }
                // line 40
                echo "      </span>

    ";
            }
            // line 43
            echo "
  ";
        } else {
            // line 45
            echo "
    ";
            // line 46
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 47
                echo "      <span class=\"price\">
        ";
                // line 48
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 49
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                        echo " ";
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "</span> ";
                    }
                    // line 50
                    echo "        ";
                } else {
                    // line 51
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%price%元", array("%price%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()))), "html", null, true);
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("免费"), "html", null, true);
                        echo "</span> ";
                    }
                    echo " 
        ";
                }
                // line 53
                echo "      </span>
    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")))) {
                // line 57
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 58
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name", $this->env->getExtension('translator')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 60
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 62
                echo "    ";
            }
            // line 63
            echo "
  ";
        }
        // line 65
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 65,  180 => 63,  177 => 62,  171 => 60,  164 => 58,  161 => 57,  159 => 56,  156 => 55,  152 => 53,  140 => 51,  137 => 50,  125 => 49,  123 => 48,  120 => 47,  118 => 46,  115 => 45,  111 => 43,  106 => 40,  100 => 38,  94 => 36,  92 => 35,  88 => 33,  86 => 32,  83 => 31,  80 => 30,  74 => 28,  66 => 26,  63 => 25,  61 => 24,  58 => 23,  55 => 22,  49 => 20,  41 => 18,  38 => 17,  36 => 16,  33 => 15,  31 => 14,  26 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
