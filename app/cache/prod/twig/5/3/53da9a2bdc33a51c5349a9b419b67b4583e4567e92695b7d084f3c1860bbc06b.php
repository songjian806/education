<?php

/* TopxiaAdminBundle:Content:index.html.twig */
class __TwigTemplate_53da9a2bdc33a51c5349a9b419b67b4583e4567e92695b7d084f3c1860bbc06b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Content:index.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
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
        $context["script_controller"] = "content/list";
        // line 5
        $context["menu"] = "admin_content";
        // line 6
        $context["type"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method");
        // line 7
        $context["typeName"] = $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("contentType"), (isset($context["type"]) ? $context["type"] : null), array(), "array");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_page_buttons($context, array $blocks = array())
    {
        echo "  \t
\t<button class=\"btn btn-success btn-sm pull-right\" id=\"content-add-btn\" type=\"button\" data-target=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_create", array("type" => (isset($context["type"]) ? $context["type"] : null))), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加"), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["typeName"]) ? $context["typeName"] : null), "html", null, true);
        echo "</button>
";
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        // line 14
        echo "
<form class=\"well well-sm form-inline\">
\t<div class=\"form-group\">
\t\t<select class=\"form-control\" name=\"status\">
\t\t  ";
        // line 18
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("contentStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('translator')->trans("--所有状态--"));
        echo "
\t\t</select>
\t</div>
\t<div class=\"form-group\">
\t\t<input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关键词"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\">
\t<button class=\"btn btn-primary\" type=\"submit\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索"), "html", null, true);
        echo "</button>

</form>

<table class=\"table table-hover\" id=\"content-table\">
\t<thead>
\t\t<tr>
\t\t\t<th width=\"30%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("标题"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("页面地址"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("类型"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布时间/人"), "html", null, true);
        echo "</th>
\t\t\t<th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 41
        if ((isset($context["contents"]) ? $context["contents"] : null)) {
            // line 42
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) ? $context["contents"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                // line 43
                echo "\t\t\t  ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["content"], "userId", array()), array(), "array");
                // line 44
                echo "\t\t\t  ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["content"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 45
                echo "\t\t\t  ";
                $this->loadTemplate("TopxiaAdminBundle:Content:content-tr.html.twig", "TopxiaAdminBundle:Content:index.html.twig", 45)->display($context);
                // line 46
                echo "\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t\t";
        } else {
            // line 48
            echo "\t\t\t<tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无记录"), "html", null, true);
            echo "</div></td></tr>
\t\t";
        }
        // line 50
        echo "\t</tbody>
</table>

";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  168 => 50,  162 => 48,  159 => 47,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  118 => 42,  116 => 41,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  79 => 25,  75 => 24,  68 => 22,  61 => 18,  55 => 14,  52 => 13,  43 => 10,  38 => 9,  34 => 1,  32 => 7,  30 => 6,  28 => 5,  26 => 3,  11 => 1,);
    }
}
