<?php

/* TopxiaAdminBundle:Block:block-visual-edit.html.twig */
class __TwigTemplate_0d0555a762077e048d473c4bee782f2300f76f336eec1109e23ce6f75eff3ab9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Block:block-visual-layout.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'blockVisual' => array($this, 'block_blockVisual'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Block:block-visual-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), "admin_block")) : ("admin_block"));
        // line 4
        $context["currentPage"] = "admin_block_visual_edit";
        // line 8
        $context["script_controller"] = "block/visual-edit";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑内容"), "html", null, true);
        echo " ";
    }

    // line 10
    public function block_blockVisual($context, array $blocks = array())
    {
        // line 11
        echo "  <style type=\"text/css\">
    .sortable-list .placeholder {
      margin: 10px 0;
      width: 100%;
      height: 40px;
      background: #FCFFC0;
      border: 1px dashed #ccc;
      list-style: none;
    }
    .nav.sortable-list .placeholder {
      width: 80px;
      padding: 10px 15px;
      background: #eee;
      margin: 0;
    }
    #btn-tabs li {
      width: 66px;
    }
    .nav.nav-pills .dragged{
      position: absolute!important;
    }
  </style>
  ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "debug", array())) {
            // line 34
            echo "    <a class=\"btn btn-default btn-sm pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_visual_view_data", array("blockTemplateId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看JSON配置"), "html", null, true);
            echo "</a>
  ";
        }
        // line 36
        echo "  ";
        if ((($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()) != "jianmo:home_top_banner") && ($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()) != "live_top_banner"))) {
            // line 37
            echo "  <!-- <div class=\"col-md-6\"> -->
    <div>
      <h4>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
            echo "</h4>
      <form id=\"block-edit-form\" class=\"visual-edit-form form-horizontal\" method=\"POST\" action=\"\">
        ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
        ";
            // line 42
            $this->loadTemplate("TopxiaAdminBundle:Block:block-visual-items.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 42)->display($context);
            // line 43
            echo "        <input type=\"hidden\" name=\"blockId\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockId", array()))) : ("")), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"code\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "code", array()))) : ("")), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"blockTemplateId\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "blockTemplateId", array()))) : ("")), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"templateName\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "templateName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "templateName", array()))) : ("")), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"mode\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "mode", array()))) : ("")), "html", null, true);
            echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">

        <button id=\"block-save-btn\" data-submiting-text=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"block-edit-form\" data-target=\"#block-edit-form\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
            echo "</button>
      </form>
    </div>

  ";
        } else {
            // line 55
            echo "    <!-- 以下是简墨新版的样式 -->
    <h4>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "title", array()), "html", null, true);
            echo "</h4>
    <form id=\"block-edit-form\" class=\"visual-edit-form form-horizontal\" method=\"POST\" action=\"\">
      ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
      ";
            // line 59
            $this->loadTemplate("TopxiaAdminBundle:Block:block-visual-items.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 59)->display($context);
            // line 60
            echo "    </form>
    <!-- 以上是新版的样式 -->
  ";
        }
        // line 63
        echo "
  <!-- <div class=\"col-md-4\">
    ";
        // line 65
        $this->loadTemplate("TopxiaAdminBundle:Block:affix-nav.html.twig", "TopxiaAdminBundle:Block:block-visual-edit.html.twig", 65)->display($context);
        // line 66
        echo "  </div> -->

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-visual-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 66,  158 => 65,  154 => 63,  149 => 60,  147 => 59,  143 => 58,  138 => 56,  135 => 55,  125 => 50,  120 => 48,  116 => 47,  112 => 46,  108 => 45,  104 => 44,  99 => 43,  97 => 42,  93 => 41,  88 => 39,  84 => 37,  81 => 36,  73 => 34,  71 => 33,  47 => 11,  44 => 10,  36 => 6,  32 => 1,  30 => 8,  28 => 4,  26 => 3,  11 => 1,);
    }
}
