<?php

/* TopxiaAdminBundle:Tag:list-tr.html.twig */
class __TwigTemplate_6ae0467decef7d40c3138e4b6c71068160f70a18169c0decf6fc2d8911683076 extends Twig_Template
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
        echo "<tr id=\"tag-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "name", array()), "html", null, true);
        echo "</td>
  <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <button class=\"btn btn-default btn-sm\" data-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_tag_update", array("id" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : null), "id", array()))), "html", null, true);
        echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
