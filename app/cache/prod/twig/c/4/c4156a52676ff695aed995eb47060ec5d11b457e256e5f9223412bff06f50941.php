<?php

/* TopxiaAdminBundle:Navigation:navigation-modal.html.twig */
class __TwigTemplate_c4156a52676ff695aed995eb47060ec5d11b457e256e5f9223412bff06f50941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Navigation:navigation-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["block"] = ((array_key_exists("block", $context)) ? (_twig_default_filter((isset($context["block"]) ? $context["block"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        if ((($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "top"))) {
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增顶部导航"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 7
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) > 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "top"))) {
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑顶部导航"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 9
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "foot"))) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增底部导航"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 11
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) > 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "foot"))) {
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑底部导航"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 13
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "friendlyLink"))) {
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新增友情链接"), "html", null, true);
            echo "
";
        } elseif ((($this->getAttribute(        // line 15
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) > 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "friendlyLink"))) {
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑友情链接"), "html", null, true);
            echo "
";
        }
        // line 18
        echo "
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "
  <form class=\"form-horizontal\" id=\"navigation-form\"
  ";
        // line 24
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0)) {
            // line 25
            echo "    action=\"";
            echo $this->env->getExtension('routing')->getPath("admin_navigation_create");
            echo "\"
  ";
        } else {
            // line 27
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_update", array("id" => $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()))), "html", null, true);
            echo "\" 
  ";
        }
        // line 29
        echo " method=\"post\">

  ";
        // line 31
        if ((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null)) {
            // line 32
            echo "  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上级导航"), "html", null, true);
            echo "</label></div>
    <div class=\"col-md-8 controls\"> 
      ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null), "name", array()), "html", null, true);
            echo "
      <div class=\"help-block\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请注意：增加子导航后，对应的上级导航链接将不起作用。"), "html", null, true);
            echo "</div>
    </div>
  </div>
  ";
        }
        // line 40
        echo "

 <div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"name\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\"> 
    <input class=\"form-control\" type=\"text\" id=\"name\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "name", array()), "html", null, true);
        echo "\" name=\"name\"></div>
</div>
<p></p>

<div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"url\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("链接地址"), "html", null, true);
        echo "</label></div>
  <div class=\"col-md-8 controls\"> <input class=\"form-control\" type=\"text\" id=\"url\" ";
        // line 51
        if ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "url", array())) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "url", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"http://\" ";
        }
        echo " name=\"url\" ></div>
</div>

<p></p>

<input type=\"hidden\" name=\"type\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()), "html", null, true);
        echo "\" >

<div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"><label>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("新开窗口"), "html", null, true);
        echo "</label></div>
          <div class=\"col-md-8 controls radios\"> 
            <div id=\"isNewWin\">
              <input type=\"radio\" name=\"isNewWin\"  value=\"0\"
               ";
        // line 63
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isNewWin", array()) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo ">
              <label >";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("否"), "html", null, true);
        echo "</label>
              <input type=\"radio\" name=\"isNewWin\"  value=\"1\"
              ";
        // line 66
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isNewWin", array()) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo ">
              <label >";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("是"), "html", null, true);
        echo "</label>
            </div>
          </div>
</div>

<div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        <div id=\"isOpen\">
          <input type=\"radio\" name=\"isOpen\"  value=\"1\" 
          ";
        // line 79
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isOpen", array()) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo ">
          <label>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
        echo "</label>
          <input type=\"radio\" name=\"isOpen\"  value=\"0\"
           ";
        // line 82
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isOpen", array()) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo ">
          <label>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "</label>
        </div>
      </div>
</div>
<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

  <script type=\"text/javascript\">
  ";
        // line 93
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0)) {
            // line 94
            echo "    app.load('navigation/create-modal')
  ";
        } else {
            // line 96
            echo "    app.load('navigation/edit-modal')
  ";
        }
        // line 98
        echo "  </script>
  
";
    }

    // line 102
    public function block_footer($context, array $blocks = array())
    {
        // line 103
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
  <button id=\"navigation-save-btn\" data-submiting-text=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#navigation-form\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:navigation-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 104,  263 => 103,  260 => 102,  254 => 98,  250 => 96,  246 => 94,  244 => 93,  236 => 88,  232 => 87,  225 => 83,  219 => 82,  214 => 80,  208 => 79,  200 => 74,  190 => 67,  184 => 66,  179 => 64,  173 => 63,  166 => 59,  160 => 56,  146 => 51,  142 => 50,  134 => 45,  129 => 43,  124 => 40,  117 => 36,  113 => 35,  108 => 33,  105 => 32,  103 => 31,  99 => 29,  93 => 27,  87 => 25,  85 => 24,  81 => 22,  78 => 21,  73 => 18,  68 => 16,  66 => 15,  62 => 14,  60 => 13,  56 => 12,  54 => 11,  50 => 10,  48 => 9,  44 => 8,  42 => 7,  38 => 6,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
