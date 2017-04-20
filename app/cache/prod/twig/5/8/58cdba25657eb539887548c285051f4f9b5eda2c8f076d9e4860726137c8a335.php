<?php

/* TopxiaWebBundle:Article/Widget:list-item.html.twig */
class __TwigTemplate_58cdba25657eb539887548c285051f4f9b5eda2c8f076d9e4860726137c8a335 extends Twig_Template
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
        echo "<article class=\"article-item\">
  <div class=\"article-metas clearfix\">
    <div class=\"pull-left\">
      <div class=\"date\">
        <div class=\"day\">";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "d"), "html", null, true);
        echo "</div>
        <div class=\"month\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "m"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("月"), "html", null, true);
        echo "</div>
      </div>
    </div>
    <div class=\"metas-body\">
      <p>
        <a class=\"link-light\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "</a>
      </p>
      <h2 class=\"title\">
        <a class=\"link-dark\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</a>
      </h2>
    </div>
  </div>
  ";
        // line 18
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array())) {
            // line 19
            echo "  <div class=\"media\">
    <div class=\"media-left\">
      <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">
        <img class=\"thumb-img\"  src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "thumb", array()), ""), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
            echo "\"></a>
    </div>
    <div class=\"media-body\">";
            // line 24
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array()), 150);
            echo "</div>
  </div>
  ";
        } else {
            // line 27
            echo "    <div class=\"content\">
      ";
            // line 28
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "body", array()), 150);
            echo "
    </div>
  ";
        }
        // line 31
        echo "</article>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Widget:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  78 => 27,  72 => 24,  65 => 22,  61 => 21,  57 => 19,  55 => 18,  46 => 14,  38 => 11,  29 => 6,  25 => 5,  19 => 1,);
    }
}
