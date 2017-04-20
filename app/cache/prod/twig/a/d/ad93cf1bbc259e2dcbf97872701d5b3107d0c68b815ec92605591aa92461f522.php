<?php

/* TopxiaWebBundle:Coin:bill-bar.html.twig */
class __TwigTemplate_ad93cf1bbc259e2dcbf97872701d5b3107d0c68b815ec92605591aa92461f522 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
";
        // line 2
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            // line 3
            echo "    ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                // line 4
                echo "    <li  class=\"";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-coin")) {
                    echo "active";
                }
                echo "\" >
      <a href=\"";
                // line 5
                echo $this->env->getExtension('routing')->getUrl("my_coin");
                echo "\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("我的%coin_name%", array("%coin_name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), $this->env->getExtension('translator')->trans("虚拟币"))), "messages");
                echo "</a>
    </li>
    ";
            }
        }
        // line 9
        echo "  <li class=\"";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-bill")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("my_bill");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的现金账单"), "html", null, true);
        echo "
    </a>
  </li>
";
        // line 13
        if (($this->env->getExtension('topxia_web_twig')->getSetting("invite.invite_code_setting") == 1)) {
            // line 14
            echo "  <li class=\"";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "my-invite-code")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getUrl("my_invite_code");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的邀请码"), "html", null, true);
            echo "
    </a>
  </li>
";
        }
        // line 19
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:bill-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  67 => 15,  60 => 14,  58 => 13,  50 => 10,  43 => 9,  34 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
