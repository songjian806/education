<?php

/* TopxiaWebBundle:Article/Part:category.html.twig */
class __TwigTemplate_1fc21ed95cf701ba5374a7eeec52b70798e452c95b99a1c45e35c8fe0f1970ee extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("category/nav");
        // line 2
        $context["nextCode"] = "";
        // line 3
        echo "<div class=\"es-tabs article-list-header\">

  <div class=\"tab-header\">
    <ul class=\"clearfix\">
      <li class=\"";
        // line 7
        if (twig_test_empty((isset($context["categoryCode"]) ? $context["categoryCode"] : null))) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("article_show");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "name", array()), $this->env->getExtension('translator')->trans("资讯频道"))) : ($this->env->getExtension('translator')->trans("资讯频道"))), "html", null, true);
        echo "</a></li>
      ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rootCategories"]) ? $context["rootCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cateogory"]) {
            // line 9
            echo "        ";
            if (($this->getAttribute($context["cateogory"], "parentId", array()) == 0)) {
                // line 10
                echo "        <li class=\"";
                if (twig_in_filter($this->getAttribute($context["cateogory"], "id", array()), (isset($context["activeIds"]) ? $context["activeIds"] : null))) {
                    $context["nextCode"] = $this->getAttribute($context["cateogory"], "code", array());
                    echo "active";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["cateogory"], "code", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cateogory"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 12
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateogory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </ul>
  </div>


  ";
        // line 17
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 18
            echo "    <div class=\"tab-body\">
      ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["l"] => $context["cs"]) {
                if ($context["cs"]) {
                    // line 20
                    echo "        <ul class=\"clearfix\">
          ";
                    // line 21
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($context["cs"]);
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
                    foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                        // line 22
                        echo "              ";
                        if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                            // line 23
                            echo "                <li class=\"all\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => (isset($context["nextCode"]) ? $context["nextCode"] : null))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
                            echo "</a></li>
              ";
                        }
                        // line 25
                        echo "              <li class=\"";
                        if (twig_in_filter($this->getAttribute($context["c"], "id", array()), (isset($context["activeIds"]) ? $context["activeIds"] : null))) {
                            $context["nextCode"] = $this->getAttribute($context["c"], "code", array());
                            echo "active";
                        }
                        echo "\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute($context["c"], "code", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
                        echo "</a></li>
          ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "        </ul>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['l'], $context['cs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </div>
  ";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 31,  144 => 29,  136 => 27,  112 => 25,  104 => 23,  101 => 22,  84 => 21,  81 => 20,  76 => 19,  73 => 18,  71 => 17,  65 => 13,  59 => 12,  46 => 10,  43 => 9,  39 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
