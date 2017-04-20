<?php

/* TopxiaWebBundle:Article/Part:detail-tags.html.twig */
class __TwigTemplate_3e16559e206719d0ba183d0ac7cb508f77db7d0e15264f404a90f2fa1a5f4005 extends Twig_Template
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
        echo "<div class=\"article-tags\">
  ";
        // line 2
        if ((isset($context["tagNames"]) ? $context["tagNames"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标签："), "html", null, true);
            echo "
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tagNames"]) ? $context["tagNames"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tagName"]) {
                // line 4
                echo "    <a class=\"btn-tag\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_tag_show", array("name" => $context["tagName"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tagName"], "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "  ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  42 => 6,  31 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
