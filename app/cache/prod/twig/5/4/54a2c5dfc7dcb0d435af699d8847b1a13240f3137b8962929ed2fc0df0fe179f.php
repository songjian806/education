<?php

/* TopxiaWebBundle:Status:status-block.html.twig */
class __TwigTemplate_54a2c5dfc7dcb0d435af699d8847b1a13240f3137b8962929ed2fc0df0fe179f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Status:status-block.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default student-dynamic\">

  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-recentactors\"></i>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员动态"), "html", null, true);
        echo "</h3>
  </div>

  <div class=\"panel-body\">
  ";
        // line 9
        if ((isset($context["learns"]) ? $context["learns"] : null)) {
            // line 10
            echo "
      ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["learns"]) ? $context["learns"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["learn"]) {
                // line 12
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 7)) {
                    // line 13
                    echo "          <div class=\"media media-number-o color-gray text-overflow\">
            ";
                    // line 14
                    echo $context["web_macro"]->getuser_link($this->getAttribute($context["learn"], "user", array()));
                    echo "
            ";
                    // line 15
                    echo $this->getAttribute($context["learn"], "message", array());
                    echo "
          </div>
         ";
                }
                // line 18
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['learn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
    ";
        } else {
            // line 21
            echo "     <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有动态"), "html", null, true);
            echo "</div>
    ";
        }
        // line 23
        echo "  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Status:status-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  89 => 21,  85 => 19,  71 => 18,  65 => 15,  61 => 14,  58 => 13,  55 => 12,  38 => 11,  35 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
