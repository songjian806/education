<?php

/* TopxiaWebBundle:Thread/Part:all-post.html.twig */
class __TwigTemplate_86b3b1bb7bf37b0ec844d864d50db31d4ebb5977439679c3ccb6b7ba9af87770 extends Twig_Template
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
        echo " <div class=\"top-reply ";
        if ( !_twig_default_filter(twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)), 0)) {
            echo "hidden";
        }
        echo "\">
  <div class=\"js-all-post-head page-header\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所有回复"), "html", null, true);
        echo "
  </div>
  <ul class=\"comment-list thread-pripost-list\">
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "      ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 8
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:post-item.html.twig", "TopxiaWebBundle:Thread/Part:all-post.html.twig", 8)->display($context);
            // line 9
            echo "    ";
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
            // line 10
            echo "      <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("一个回复都没有！"), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </ul>

  <nav class=\"text-center\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:all-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  79 => 12,  70 => 10,  57 => 9,  54 => 8,  51 => 7,  33 => 6,  27 => 3,  19 => 1,);
    }
}
