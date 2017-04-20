<?php

/* ClassroomBundle:Classroom:introduction.html.twig */
class __TwigTemplate_871e77f4fa7cc8b3a2511036c50b5c4ee97d268942c3b2b2791f0d48007c8198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom:introduction.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "introduction";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        $this->displayParentBlock("keywords", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <div class=\"class-about\">
        ";
        // line 10
        if (twig_test_empty((isset($context["introduction"]) ? $context["introduction"] : null))) {
            // line 11
            echo "            <p class=\"mvl tac text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无介绍"), "html", null, true);
            echo "</p>
        ";
        } else {
            // line 13
            echo "              ";
            echo (isset($context["introduction"]) ? $context["introduction"] : null);
            echo "
        ";
        }
        // line 15
        echo "  </div>
    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:introduction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  66 => 13,  60 => 11,  58 => 10,  55 => 9,  52 => 8,  46 => 5,  40 => 4,  34 => 2,  30 => 1,  28 => 3,  11 => 1,);
    }
}
