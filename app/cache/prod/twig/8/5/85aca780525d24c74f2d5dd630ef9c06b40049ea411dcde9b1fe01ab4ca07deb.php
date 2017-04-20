<?php

/* TopxiaAdminBundle:Tag:index.html.twig */
class __TwigTemplate_85aca780525d24c74f2d5dd630ef9c06b40049ea411dcde9b1fe01ab4ca07deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Tag:index.html.twig", 1);
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
        $context["menu"] = "admin_course_tag_manage";
        // line 4
        $context["script_controller"] = "tag/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<table id=\"tag-table\" class=\"table table-striped\">
    <thead>
        <th width=\"10%\">ID</th>
        <th width=\"60%\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加时间"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </thead>
    
    <tbody>
      ";
        // line 16
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 18
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Tag:list-tr.html.twig", "TopxiaAdminBundle:Tag:index.html.twig", 18)->display($context);
                // line 19
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      ";
        } else {
            // line 21
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无标签记录"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        // line 23
        echo "
    </tbody>
</table>

";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  103 => 23,  97 => 21,  94 => 20,  80 => 19,  77 => 18,  59 => 17,  57 => 16,  50 => 12,  46 => 11,  42 => 10,  36 => 6,  33 => 5,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
