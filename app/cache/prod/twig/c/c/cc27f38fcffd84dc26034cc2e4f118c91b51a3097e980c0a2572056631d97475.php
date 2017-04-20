<?php

/* TopxiaWebBundle:Content:page-show.html.twig */
class __TwigTemplate_cc27f38fcffd84dc26034cc2e4f118c91b51a3097e980c0a2572056631d97475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Content:page-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["siteNav"] = ("page/" . (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))));
        // line 9
        $context["bodyClass"] = "custompage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), 100);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"es-section\">

  <div class=\"section-header\"><h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo "</h1></div>

  ";
        // line 15
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array())) {
            // line 16
            echo "  \t";
            echo $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array());
            echo "
  ";
        } else {
            // line 18
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前页面尚未编辑内容，请在管理后台编辑。"), "html", null, true);
            echo "</div>
  ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Content:page-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 20,  78 => 18,  72 => 16,  70 => 15,  65 => 13,  61 => 11,  58 => 10,  52 => 5,  44 => 4,  36 => 3,  32 => 1,  30 => 9,  28 => 7,  11 => 1,);
    }
}
