<?php

/* TopxiaWebBundle:Thread/Part:common-header.html.twig */
class __TwigTemplate_f4b9b118ff3712fa96a0a635a917d36af8eb1225eaa008e2d360fdfc2d80a28e extends Twig_Template
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
        echo "<div class=\"media topic-header\">
  <div class=\"media-left media-middle\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
        echo "
  </div>
  <div class=\"media-body\">
    <div class=\"title\">
      ";
        // line 7
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "sticky", array())) {
            // line 8
            echo "        <span class=\"label label-danger\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶帖"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶"), "html", null, true);
            echo "</span>
      ";
        }
        // line 10
        echo "      ";
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "nice", array())) {
            // line 11
            echo "        <span class=\"label label-warning\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精华帖"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "
    </div>
    <div class=\"metas\">
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发起了该%dict_text% ·", array("%dict_text%" => $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array())))), "html", null, true);
        echo "<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
    </div> 
  </div>
  <div class=\"media-data\">
    <span><span class=\"thread-post-num\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "</span><br>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
        echo "</span>
    <span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "hitNum", array()), "html", null, true);
        echo "<br>";
        echo "浏览";
        echo "</span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:common-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  71 => 20,  58 => 16,  51 => 13,  43 => 11,  40 => 10,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
