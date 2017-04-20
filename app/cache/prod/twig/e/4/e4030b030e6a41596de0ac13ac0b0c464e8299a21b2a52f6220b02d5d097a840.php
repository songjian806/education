<?php

/* TopxiaWebBundle:Card:layout.html.twig */
class __TwigTemplate_e4030b030e6a41596de0ac13ac0b0c464e8299a21b2a52f6220b02d5d097a840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Coin:layout.html.twig", "TopxiaWebBundle:Card:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Coin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "my-cards";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的卡包"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"es-section h400\">
  <div class=\"section-header\"><h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的卡包"), "html", null, true);
        echo "</h3></div>

  ";
        // line 10
        $context["main_nav"] = ((array_key_exists("main_nav", $context)) ? (_twig_default_filter((isset($context["main_nav"]) ? $context["main_nav"] : null), null)) : (null));
        // line 11
        echo "
  ";
        // line 12
        $this->displayBlock('main_body', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_main_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  59 => 13,  57 => 12,  54 => 11,  52 => 10,  47 => 8,  44 => 7,  41 => 6,  33 => 2,  29 => 1,  27 => 4,  11 => 1,);
    }
}
