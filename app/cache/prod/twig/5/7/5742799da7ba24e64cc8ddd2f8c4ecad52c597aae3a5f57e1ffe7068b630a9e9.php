<?php

/* TopxiaAdminBundle:CommonAdmin:li.html.twig */
class __TwigTemplate_5742799da7ba24e64cc8ddd2f8c4ecad52c597aae3a5f57e1ffe7068b630a9e9 extends Twig_Template
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
        echo "<li class=\"shortcut-item clearfix\">
  <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "url", array()), "html", null, true);
        echo "\">
    <i class=\"glyphicon glyphicon-bookmark text-info\"></i>
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "title", array()), "html", null, true);
        echo "
  </a>
  <span class=\"glyphicon glyphicon-remove-circle text-muted\" data-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_common_remove", array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除常用链接"), "html", null, true);
        echo "\"></span>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CommonAdmin:li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
