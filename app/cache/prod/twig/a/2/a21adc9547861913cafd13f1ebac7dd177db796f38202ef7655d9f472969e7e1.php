<?php

/* TopxiaWebBundle:MyCourse:learning.html.twig */
class __TwigTemplate_a21adc9547861913cafd13f1ebac7dd177db796f38202ef7655d9f472969e7e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyCourse:layout.html.twig", "TopxiaWebBundle:MyCourse:learning.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["tab_nav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习中"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"panel panel-default panel-col\">
\t  <div class=\"panel-heading\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的课程"), "html", null, true);
        echo "</div>
\t  <div class=\"panel-body\">
  \t\t  \t ";
        // line 11
        $this->loadTemplate("TopxiaWebBundle:MyCourse:nav-pill.html.twig", "TopxiaWebBundle:MyCourse:learning.html.twig", 11)->display($context);
        // line 12
        echo "\t  \t ";
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 13
            echo "\t\t     ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:coursesBlock", array("courses" => (isset($context["courses"]) ? $context["courses"] : null), "view" => "grid", "mode" => "learn")));
            echo "
\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
\t\t  ";
        } else {
            // line 16
            echo "\t\t    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无学习中的课程"), "html", null, true);
            echo "</div>
\t\t  ";
        }
        // line 18
        echo "\t  </div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  66 => 16,  61 => 14,  56 => 13,  53 => 12,  51 => 11,  46 => 9,  43 => 8,  40 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
