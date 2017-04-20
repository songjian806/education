<?php

/* TopxiaWebBundle:Thread/Part:good-post.html.twig */
class __TwigTemplate_fd3d81856351e35e67b5bc084d3ef99cd68a8d85d8e139a8a509ae0071bfc7f3 extends Twig_Template
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
        echo "<div class=\"top-reply ";
        if ( !_twig_default_filter(twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)), 0)) {
            echo "hidden";
        }
        echo "\">
  <div class=\"page-header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("精彩回复"), "html", null, true);
        echo "</div>
  <ul class=\"comment-list\">
    ";
        // line 4
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
            // line 5
            echo "      ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 6
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:post-item.html.twig", "TopxiaWebBundle:Thread/Part:good-post.html.twig", 6)->display($context);
            // line 7
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
            // line 8
            echo "      <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("一个精彩回复都没有！"), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:good-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  68 => 8,  55 => 7,  52 => 6,  49 => 5,  31 => 4,  26 => 2,  19 => 1,);
    }
}
