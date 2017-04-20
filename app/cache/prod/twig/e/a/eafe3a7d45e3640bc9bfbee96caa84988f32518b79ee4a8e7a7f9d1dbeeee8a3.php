<?php

/* TopxiaAdminBundle:Category:tbody.html.twig */
class __TwigTemplate_eafe3a7d45e3640bc9bfbee96caa84988f32518b79ee4a8e7a7f9d1dbeeee8a3 extends Twig_Template
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
        echo "
<li id=\"category-table-body\" data-sort-url=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("admin_category_sort");
        echo "\">
    ";
        // line 3
        if ( !twig_test_empty((isset($context["categories"]) ? $context["categories"] : null))) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this, "showCategoryTree", array(0 => (isset($context["categories"]) ? $context["categories"] : null), 1 => (isset($context["group"]) ? $context["group"] : null), 2 => false), "method");
            echo "
    ";
        } else {
            // line 6
            echo "        <div class=\"row empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无分类记录"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "</li>

";
        // line 10
        $this->env->getExtension('topxia_web_twig')->loadScript("category/tbody");
        // line 11
        echo "
";
    }

    // line 12
    public function getshowCategoryTree($__categories__ = null, $__group__ = null, $__isCollapseChildren__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "group" => $__group__,
            "isCollapseChildren" => $__isCollapseChildren__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    <ul class=\"list-table sortable-list\" data-group-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), 0, array(), "array"), "parentId", array(), "array"), "html", null, true);
            echo "\">
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "            ";
                $context["isParent"] =  !twig_test_empty((($this->getAttribute($context["category"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["category"], "children", array()), null)) : (null)));
                // line 16
                echo "            ";
                $context["isRoot"] = ($this->getAttribute($context["category"], "depth", array()) == 1);
                // line 17
                echo "            <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"tr\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parentId", array()), "html", null, true);
                echo "\" style=\"display: ";
                echo ((( !(isset($context["isRoot"]) ? $context["isRoot"] : null) && (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null))) ? ("none") : ("block"));
                echo "\">
                <div class=\"row";
                // line 18
                echo ((((isset($context["isParent"]) ? $context["isParent"] : null) && (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null))) ? (" row-collapse") : (" row-expand"));
                echo "\">
                    <div class=\"td col-md-7 name sort-handle\" style=\"padding-left: ";
                // line 19
                echo twig_escape_filter($this->env, (24 * ($this->getAttribute($context["category"], "depth", array()) - 1)), "html", null, true);
                echo "px; overflow: hidden\">
                        ";
                // line 20
                if ((isset($context["isParent"]) ? $context["isParent"] : null)) {
                    // line 21
                    echo "                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-";
                    echo (((isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null)) ? ("right") : ("down"));
                    echo "\"></i>
                        ";
                } else {
                    // line 23
                    echo "                            <i class=\"list-table-tree-icon\"></i>
                        ";
                }
                // line 25
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"td col-md-2 code\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
                echo "</div>
                    <div class=\"td col-md-3 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">
                            <i class=\"glyphicon glyphicon-edit\"></i> ";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
                echo "
                        </a>
                        ";
                // line 32
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "depth", array()) > $this->getAttribute($context["category"], "depth", array()))) {
                    // line 33
                    echo "                            <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()), "groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加子分类"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 35
                echo "
                    </div>
                </div>
                ";
                // line 38
                if ((isset($context["isParent"]) ? $context["isParent"] : null)) {
                    // line 39
                    echo "                    ";
                    echo $this->getAttribute($this, "showCategoryTree", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["group"]) ? $context["group"] : null), 2 => (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : null)), "method");
                    echo "
                ";
                }
                // line 41
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 43,  156 => 41,  150 => 39,  148 => 38,  143 => 35,  135 => 33,  133 => 32,  128 => 30,  124 => 29,  119 => 27,  113 => 25,  109 => 23,  103 => 21,  101 => 20,  97 => 19,  93 => 18,  80 => 17,  77 => 16,  74 => 15,  70 => 14,  65 => 13,  51 => 12,  46 => 11,  44 => 10,  40 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
