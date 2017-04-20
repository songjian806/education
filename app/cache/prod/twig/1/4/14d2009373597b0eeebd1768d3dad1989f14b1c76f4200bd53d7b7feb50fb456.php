<?php

/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_14d2009373597b0eeebd1768d3dad1989f14b1c76f4200bd53d7b7feb50fb456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:avatar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "avatar";
        // line 5
        $context["script_controller"] = "settings/avatar";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头像"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Settings:avatar.html.twig", "TopxiaWebBundle:Settings:avatar.html.twig", 8, "2045846250")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:avatar.html.twig */
class __TwigTemplate_14d2009373597b0eeebd1768d3dad1989f14b1c76f4200bd53d7b7feb50fb456_2045846250 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:avatar.html.twig", 8);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头像"), "html", null, true);
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
      ";
        // line 12
        if ((isset($context["fromCourse"]) ? $context["fromCourse"] : null)) {
            // line 13
            echo "      <div class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("请设置自定义头像。"), "html", null, true);
            echo "</div>
      ";
        }
        // line 15
        echo "
      <form id=\"settings-avatar-form\" class=\"form-horizontal\" method=\"post\">

        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"><b>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前头像"), "html", null, true);
        echo "</b></div>
          <div class=\"controls col-md-8 controls\">
          \t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\">
          </div>
          <div class=\"controls col-md-8 controls\">
            <p class=\"help-block\">";
        // line 31
        echo $this->env->getExtension('translator')->trans("你可以上传JPG、GIF或PNG格式的文件，文件大小不能超过");
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("2M"), "html", null, true);
        echo "</strong>。</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-2 control-label\"></div>
          <div class=\"controls col-md-8 controls\">
            <a id=\"upload-picture-btn\"
            class=\"btn btn-primary\"
            data-upload-token=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("tmp", "image"), "html", null, true);
        echo "\"
            data-goto-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_avatar_crop", array("goto" => (isset($context["goto"]) ? $context["goto"] : null))), "html", null, true);
        echo "\"
            >";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上传新头像"), "html", null, true);
        echo "</a>
          </div>
        </div>

        ";
        // line 46
        if ((isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null)) {
            // line 47
            echo "          <div class=\"form-group\">
            <div class=\"col-md-2 control-label\"><b>";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("论坛头像"), "html", null, true);
            echo "</b></div>
            <div class=\"controls col-md-8 controls\">
              <img src=\"";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" class=\"mrm\">
              <button class=\"btn btn-default use-partner-avatar\" type=\"button\" data-url=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("settings_avatar_fetch_partner");
            echo "\" data-goto=\"";
            echo $this->env->getExtension('routing')->getPath("settings_avatar");
            echo "\" data-img-url=\"";
            echo twig_escape_filter($this->env, (isset($context["partnerAvatar"]) ? $context["partnerAvatar"] : null), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("使用该头像"), "html", null, true);
            echo "</button>
            </div>
          </div>
        ";
        }
        // line 55
        echo "
      </form>

    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 55,  181 => 51,  177 => 50,  172 => 48,  169 => 47,  167 => 46,  160 => 42,  156 => 41,  152 => 40,  138 => 31,  127 => 23,  122 => 21,  116 => 18,  111 => 15,  105 => 13,  103 => 12,  100 => 11,  97 => 10,  91 => 9,  45 => 8,  42 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
