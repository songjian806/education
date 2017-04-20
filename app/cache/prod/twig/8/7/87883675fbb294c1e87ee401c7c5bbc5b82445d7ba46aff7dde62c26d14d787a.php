<?php

/* TopxiaAdminBundle:Block:table.html.twig */
class __TwigTemplate_87883675fbb294c1e87ee401c7c5bbc5b82445d7ba46aff7dde62c26d14d787a extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_block", array("category" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所有"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_block", array("category" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前主题"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_block", array("category" => "system"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "system")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("系统"), "html", null, true);
        echo "</a>

";
        // line 8
        $context["url"] = ($this->env->getExtension('routing')->getPath("admin_block_match") . "?q={{query}}");
        // line 9
        echo "</div>
<input class=\"form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("搜索编辑区"), "html", null, true);
        echo "\" data-url='";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "'>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  57 => 9,  55 => 8,  44 => 6,  33 => 4,  22 => 2,  19 => 1,);
    }
}
