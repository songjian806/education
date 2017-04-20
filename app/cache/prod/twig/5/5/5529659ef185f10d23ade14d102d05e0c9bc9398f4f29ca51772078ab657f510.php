<?php

/* TopxiaWebBundle:Review/Widget:subposts.html.twig */
class __TwigTemplate_5529659ef185f10d23ade14d102d05e0c9bc9398f4f29ca51772078ab657f510 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Review/Widget:subposts.html.twig", 1);
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
            $context["author"] = $this->env->getExtension('topxia_data_twig')->getData("User", array("userId" => $this->getAttribute($context["post"], "userId", array())));
            // line 6
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Review/Widget:subpost-item.html.twig", "TopxiaWebBundle:Review/Widget:subposts.html.twig", 6)->display($context);
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
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Review/Widget:subposts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  48 => 7,  45 => 6,  42 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
