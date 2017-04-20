<?php

/* TopxiaWebBundle:Article/Part:detail-breadcrumb.html.twig */
class __TwigTemplate_44971e2c6f32bf466220908ab41c0f295259afebb4dcf65661a7b61c08112f86 extends Twig_Template
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
        echo "<ol class=\"breadcrumb\">
  <li><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array()), $this->env->getExtension('translator')->trans("资讯频道"))) : ($this->env->getExtension('translator')->trans("资讯频道"))), "html", null, true);
        echo "</a></li>
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "  <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正文"), "html", null, true);
        echo "</li>
</ol>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
