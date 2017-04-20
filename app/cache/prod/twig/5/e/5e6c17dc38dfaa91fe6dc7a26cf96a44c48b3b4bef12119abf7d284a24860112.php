<?php

/* TopxiaWebBundle:Article/Part:list-header-nav.html.twig */
class __TwigTemplate_5e6c17dc38dfaa91fe6dc7a26cf96a44c48b3b4bef12119abf7d284a24860112 extends Twig_Template
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
        $context["currentNavCategory"] = ((array_key_exists("categoryCode", $context)) ? (_twig_default_filter((isset($context["categoryCode"]) ? $context["categoryCode"] : null), null)) : (null));
        // line 2
        $context["rootCategory"] = (($this->getAttribute((isset($context["rootCategory"]) ? $context["rootCategory"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["rootCategory"]) ? $context["rootCategory"] : null), "code", array()), null)) : (null));
        // line 3
        echo "<ul class=\"clearfix\">
  <li ";
        // line 4
        if ( !(isset($context["currentNavCategory"]) ? $context["currentNavCategory"] : null)) {
            echo " role=\"presentation\" class=\"active\" ";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array()), $this->env->getExtension('translator')->trans("资讯频道"))) : ($this->env->getExtension('translator')->trans("资讯频道"))), "html", null, true);
        echo "</a></li>
  ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 6
            echo "    ";
            if ((($this->getAttribute($context["cat"], "parentId", array()) == 0) && ($this->getAttribute($context["cat"], "published", array()) == 1))) {
                // line 7
                echo "       <li class=\"";
                if (((isset($context["rootCategory"]) ? $context["rootCategory"] : null) == $this->getAttribute($context["cat"], "code", array()))) {
                    echo "active";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["cat"], "code", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "name", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 9
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:list-header-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 10,  55 => 9,  43 => 7,  40 => 6,  36 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
