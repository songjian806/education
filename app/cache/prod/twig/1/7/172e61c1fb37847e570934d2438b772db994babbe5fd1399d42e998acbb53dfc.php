<?php

/* TopxiaWebBundle:Thread:subposts.html.twig */
class __TwigTemplate_172e61c1fb37847e570934d2438b772db994babbe5fd1399d42e998acbb53dfc extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread:subposts.html.twig", 1);
        // line 2
        echo "
<ul class=\"media-list thread-post-list thread-subpost-list\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 6
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Thread:subpost-item.html.twig", "TopxiaWebBundle:Thread:subposts.html.twig", 6)->display($context);
            // line 7
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>

";
        // line 10
        if ((isset($context["less"]) ? $context["less"] : null)) {
            // line 11
            echo "  <div class=\"text-center\">
    ";
            // line 12
            echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null), "pagination-sm hide");
            echo "
  </div>
";
        } else {
            // line 15
            echo "  <div class=\"text-center\">
    ";
            // line 16
            echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null), "pagination-sm");
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:subposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  77 => 15,  71 => 12,  68 => 11,  66 => 10,  62 => 8,  48 => 7,  45 => 6,  42 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
