<?php

/* TopxiaWebBundle:Coin:layout.html.twig */
class __TwigTemplate_aa689ef65e1f10f0fd3e694f899cb21884e07e836140c3abee1fce1f4b52b428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Coin:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("账户中心"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 38
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 40
        $this->displayBlock('main', $context, $blocks);
        // line 41
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "
      <div class=\"sidenav\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("账户中心"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 13
        if (twig_in_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), array(0 => "my-bill", 1 => "my-coin", 2 => "my-invite-code"))) {
            echo " active ";
        }
        echo "\">
            <a href=\"
              ";
        // line 15
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 16
            echo "                ";
            echo $this->env->getExtension('routing')->getPath("my_coin");
            echo "
              ";
        } else {
            // line 18
            echo "                ";
            echo $this->env->getExtension('routing')->getPath("my_bill");
            echo "
              ";
        }
        // line 20
        echo "              \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的账户"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 23
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-orders")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("my_orders");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的订单"), "html", null, true);
        echo "</a>
          </li>
          <li class=\"list-group-item ";
        // line 26
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-cards")) {
            echo " active ";
        }
        echo "\">
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("my_cards");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的卡包"), "html", null, true);
        echo "</a>
          </li>
          </li>
          ";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip")) {
            // line 31
            echo "          <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-vip-record")) {
                echo " active ";
            }
            echo "\">
            <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("vip_history");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("会员记录"), "html", null, true);
            echo "</a>
          </li>
          ";
        }
        // line 35
        echo "        </ul>
      </div>
    ";
    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 40,  144 => 35,  136 => 32,  129 => 31,  127 => 30,  119 => 27,  113 => 26,  106 => 24,  100 => 23,  93 => 20,  87 => 18,  81 => 16,  79 => 15,  72 => 13,  68 => 12,  63 => 9,  60 => 8,  54 => 41,  52 => 40,  48 => 38,  46 => 8,  42 => 6,  39 => 5,  31 => 3,  11 => 1,);
    }
}
