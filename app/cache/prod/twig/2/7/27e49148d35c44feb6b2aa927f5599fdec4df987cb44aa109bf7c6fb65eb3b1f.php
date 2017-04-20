<?php

/* TopxiaAdminBundle:Block:index.html.twig */
class __TwigTemplate_27e49148d35c44feb6b2aa927f5599fdec4df987cb44aa109bf7c6fb65eb3b1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), "admin_block")) : ("admin_block"));
        // line 5
        $context["script_controller"] = "block/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo " ";
        $this->loadTemplate("TopxiaAdminBundle:Block:table.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 7)->display($context);
        // line 8
        echo "<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近更新"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        if ((isset($context["blockTemplates"]) ? $context["blockTemplates"] : null)) {
            // line 18
            echo "      ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blockTemplates"]) ? $context["blockTemplates"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["blockTemplate"]) {
                // line 19
                echo "        ";
                $context["latestHistory"] = (($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["blockTemplate"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["blockTemplate"], "id", array()), array(), "array"), null)) : (null));
                // line 20
                echo "        ";
                $context["latestUpdateUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array"), null)) : (null));
                // line 21
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:Block:list-tr.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 21)->display($context);
                // line 22
                echo "        
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockTemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  ";
        } else {
            // line 25
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无编辑区记录"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        // line 27
        echo "   </tbody>
</table>
 ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 29,  112 => 27,  106 => 25,  103 => 24,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  61 => 18,  59 => 17,  52 => 13,  48 => 12,  44 => 11,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
