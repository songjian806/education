<?php

/* TopxiaWebBundle:MyCourse:nav-pill.html.twig */
class __TwigTemplate_6a72aca78dfed47e5aa21ee5ad4d8ac3df5e7bcd5b5b61c9b9e8425666d8a49a extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
\t<li";
        // line 2
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "learning")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习中"), "html", null, true);
        echo "</a></li>
\t<li";
        // line 3
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "learned")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learned");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已学完"), "html", null, true);
        echo "</a></li>
\t<li";
        // line 4
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "favorited")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_favorited");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收藏"), "html", null, true);
        echo "</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  32 => 3,  22 => 2,  19 => 1,);
    }
}
