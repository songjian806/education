<?php

/* TopxiaWebBundle:Category:explore-nav.html.twig */
class __TwigTemplate_1cba16bb0e2340b9bd5d8a5559944149230246ebe52604892c0fac7260f4d8d3 extends Twig_Template
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
        echo "<div class=\"es-tabs\">

  <div class=\"tab-header\">
    <ul class=\"clearfix\">
      <li class=\"";
        // line 7
        if (((isset($context["category"]) ? $context["category"] : null) == "")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => "", "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
        echo "</a></li>
      ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rootCategories"]) ? $context["rootCategories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cateogory"]) {
            // line 9
            echo "        <li class=\"";
            if (twig_in_filter($this->getAttribute($context["cateogory"], "id", array()), (isset($context["activeIds"]) ? $context["activeIds"] : null))) {
                $context["nextCode"] = $this->getAttribute($context["cateogory"], "code", array());
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => $this->getAttribute($context["cateogory"], "code", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cateogory"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cateogory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </ul>
  </div>


  ";
        // line 15
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 16
            echo "    <div class=\"tab-body\">
      ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["l"] => $context["cs"]) {
                if ($context["cs"]) {
                    // line 18
                    echo "        <ul class=\"clearfix\">
          ";
                    // line 19
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
                        // line 20
                        echo "            ";
                        if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                            // line 21
                            echo "              <li class=\"all\"><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => (isset($context["nextCode"]) ? $context["nextCode"] : null), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("全部"), "html", null, true);
                            echo "</a></li>
            ";
                        }
                        // line 23
                        echo "            <li class=\"";
                        if (twig_in_filter($this->getAttribute($context["c"], "id", array()), (isset($context["activeIds"]) ? $context["activeIds"] : null))) {
                            $context["nextCode"] = $this->getAttribute($context["c"], "code", array());
                            echo "active";
                        }
                        echo "\"><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["path"]) ? $context["path"] : null), array("category" => $this->getAttribute($context["c"], "code", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
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
                    // line 25
                    echo "        </ul>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['l'], $context['cs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    </div>
  ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Category:explore-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 29,  138 => 27,  130 => 25,  106 => 23,  98 => 21,  95 => 20,  78 => 19,  75 => 18,  70 => 17,  67 => 16,  65 => 15,  59 => 11,  43 => 9,  39 => 8,  29 => 7,  23 => 3,  21 => 2,  19 => 1,);
    }
}
