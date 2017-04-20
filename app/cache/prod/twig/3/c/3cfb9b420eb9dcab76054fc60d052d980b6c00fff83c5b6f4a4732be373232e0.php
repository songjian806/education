<?php

/* TopxiaAdminBundle:Category:embed.html.twig */
class __TwigTemplate_3cfb9b420eb9dcab76054fc60d052d980b6c00fff83c5b6f4a4732be373232e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Category:embed.html.twig", 1);
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
        $context["menu"] = "admin_course_category_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <ul class=\"list-table\" id=\"category-table\" style=\"margin-bottom: 0\">
    <li class=\"th\">
      <div class=\"row\">
        <div class=\"td col-md-7\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</div>
        <div class=\"td col-md-2\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编码"), "html", null, true);
        echo "</div>
        <div class=\"td col-md-3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</div>
      </div>
    </li>
    ";
        // line 15
        $this->loadTemplate("TopxiaAdminBundle:Category:tbody.html.twig", "TopxiaAdminBundle:Category:embed.html.twig", 15)->display($context);
        // line 16
        echo "  </ul>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  54 => 15,  48 => 12,  44 => 11,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
