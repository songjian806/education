<?php

/* TopxiaWebBundle:Article/Part:list-main.html.twig */
class __TwigTemplate_d4c595f65ea2cf2741ad1dd9aaa02086cb31c270ddc3008695b7d48e29824260 extends Twig_Template
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
        echo "<section class=\"es-section\">
  <div class=\"article-list\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "      ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"))) : (""));
            // line 5
            echo "      ";
            if ( !twig_test_empty((isset($context["category"]) ? $context["category"] : null))) {
                // line 6
                echo "      \t";
                $this->loadTemplate("TopxiaWebBundle:Article/Widget:list-item.html.twig", "TopxiaWebBundle:Article/Part:list-main.html.twig", 6)->display($context);
                // line 7
                echo "  \t  ";
            }
            // line 8
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
            // line 9
            echo "       <div class=\"empty tac text-muted mvl\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有任何资讯"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  </div>
  ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Article/Part:paginator.html.twig", "TopxiaWebBundle:Article/Part:list-main.html.twig", 12)->display($context);
        // line 13
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:list-main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  78 => 12,  75 => 11,  66 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  23 => 3,  19 => 1,);
    }
}
