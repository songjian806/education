<?php

/* TopxiaWebBundle:Article:index.html.twig */
class __TwigTemplate_0b402577095518be0c2f94889d69b6d62e1e0d8aba126ffa6ef84701eebf8c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["bodyClass"] = "artcile-list-page";
        // line 6
        $context["script_controller"] = "article/list.js";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array()), $this->env->getExtension('translator')->trans("资讯频道"))) : ($this->env->getExtension('translator')->trans("资讯频道"))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
  <div class=\"es-tabs article-list-header\">
    <div class=\"tab-header\">
      ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-header-nav.html.twig", "TopxiaWebBundle:Article:index.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
  </div>

  <!-- 资讯头部 -->
  ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-header.html.twig", "TopxiaWebBundle:Article:index.html.twig", 17)->display($context);
        // line 18
        echo "
  <div class=\"article-list-body row\">
    <!-- list主内容-->
    <div class=\"col-md-8 article-list-main\">
      ";
        // line 22
        $this->loadTemplate("TopxiaWebBundle:Article/Part:list-main.html.twig", "TopxiaWebBundle:Article:index.html.twig", 22)->display(array_merge($context, array("articles" => (isset($context["latestArticles"]) ? $context["latestArticles"] : null))));
        // line 23
        echo "    </div>

    <aside class=\"col-md-4 article-sidebar\">
      ";
        // line 26
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:sidebar.html.twig", "TopxiaWebBundle:Article:index.html.twig", 26)->display($context);
        // line 27
        echo "    </aside>
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  73 => 26,  68 => 23,  66 => 22,  60 => 18,  58 => 17,  52 => 13,  50 => 12,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
