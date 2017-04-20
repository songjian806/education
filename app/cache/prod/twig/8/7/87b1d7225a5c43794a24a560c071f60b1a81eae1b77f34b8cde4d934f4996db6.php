<?php

/* ClassroomBundle:Classroom\Review:list.html.twig */
class __TwigTemplate_87b1d7225a5c43794a24a560c071f60b1a81eae1b77f34b8cde4d934f4996db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom\\Review:list.html.twig", 1);
        $this->blocks = array(
            'description' => array($this, 'block_description'),
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
        $context["nav"] = "review";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $context["goto"] = $this->env->getExtension('routing')->getPath("classroom_reviews", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())));
        // line 7
        echo "\t";
        $context["canAccess"] = ((((isset($context["member"]) ? $context["member"] : null) && twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) || twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) || twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array())));
        // line 8
        echo "
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Review:Widget/list.html.twig", "ClassroomBundle:Classroom\\Review:list.html.twig", 9)->display($context);
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom\\Review:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
