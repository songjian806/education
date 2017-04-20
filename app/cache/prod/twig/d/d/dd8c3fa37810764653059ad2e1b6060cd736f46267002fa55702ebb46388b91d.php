<?php

/* TopxiaAdminBundle:Block:block-visual-layout.html.twig */
class __TwigTemplate_dd8c3fa37810764653059ad2e1b6060cd736f46267002fa55702ebb46388b91d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Block:block-visual-layout.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'blockVisual' => array($this, 'block_blockVisual'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "  <ul class=\"nav nav-pills mbl small\">
    <li ";
        // line 5
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_block_visual_edit")) {
            echo "class=\"active\"";
        }
        echo ">
      <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_visual_edit", array("blockTemplateId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array()))), "html", null, true);
        echo "\">编辑</a>

    </li>
    <li ";
        // line 9
        if (((isset($context["currentPage"]) ? $context["currentPage"] : null) == "admin_block_visual_edit_history")) {
            echo "class=\"active\"";
        }
        echo ">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_visual_edit_history", array("blockTemplateId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array()))), "html", null, true);
        echo "\">历史记录</a>
    </li>
  </ul>
  ";
        // line 13
        $this->displayBlock('blockVisual', $context, $blocks);
    }

    public function block_blockVisual($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-visual-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  53 => 10,  47 => 9,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
