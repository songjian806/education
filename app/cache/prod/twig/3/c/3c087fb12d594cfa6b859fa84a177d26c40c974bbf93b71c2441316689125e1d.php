<?php

/* TopxiaWebBundle:Thread:list.html.twig */
class __TwigTemplate_3c087fb12d594cfa6b859fa84a177d26c40c974bbf93b71c2441316689125e1d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread:list.html.twig", 1);
        // line 2
        echo "
<div class=\"topic-list\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 5
            echo "    ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array");
            // line 6
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:list-item.html.twig", "TopxiaWebBundle:Thread:list.html.twig", 6)->display($context);
            // line 7
            echo "  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 8
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无话题"), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>

<nav class=\"text-center\">
  ";
        // line 13
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "
</nav>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  71 => 10,  62 => 8,  49 => 7,  46 => 6,  43 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
