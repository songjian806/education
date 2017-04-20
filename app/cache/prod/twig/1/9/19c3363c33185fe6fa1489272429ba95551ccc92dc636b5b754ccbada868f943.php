<?php

/* TopxiaWebBundle:LessonLessonPlugin:list.html.twig */
class __TwigTemplate_19c3363c33185fe6fa1489272429ba95551ccc92dc636b5b754ccbada868f943 extends Twig_Template
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
        echo "<div class=\"course-item-list-in-toolbar-pane\">
  ";
        // line 2
        $this->loadTemplate("TopxiaWebBundle:CourseLesson/Widget:list.html.twig", "TopxiaWebBundle:LessonLessonPlugin:list.html.twig", 2)->display(array_merge($context, array("fromPlugin" => true)));
        // line 3
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonLessonPlugin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  22 => 2,  19 => 1,);
    }
}
