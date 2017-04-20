<?php

/* TopxiaWebBundle:Article/Part:detail-share.html.twig */
class __TwigTemplate_598a32f1a533f4aa00fb071f7086e51d157540a20b2f7372d99d93ca976145ca extends Twig_Template
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
        echo "<div class=\"article-sns\">
  <a href=\"javascript:;\" class=\"love js-article-like ";
        // line 2
        if ((isset($context["userLike"]) ? $context["userLike"] : null)) {
            echo "color-primary";
        }
        echo "\" data-like-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_like", array("articleId" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" data-cancel-like-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_cancel_like", array("articleId" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\"><i class=\"es-icon es-icon-favorite\"></i><span class=\"js-like-num\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "upsNum", array()), "html", null, true);
        echo "</span></a>
  <span class=\"es-share right\">
    <a class=\"dropdown-toggle\" href=\"javascript:;\" data-toggle=\"dropdown\">
      <i class=\"es-icon es-icon-share\"></i>
    </a>
    ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:Article/Part:detail-share.html.twig", 7)->display(array_merge($context, array("type" => "article")));
        // line 8
        echo "  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  38 => 7,  22 => 2,  19 => 1,);
    }
}
