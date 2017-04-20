<?php

/* ClassroomBundle:Classroom:teachers-block.html.twig */
class __TwigTemplate_3148174b7396e39bead0a62a86c84cf055de0207c7e1b0b2eb583e9d0454aa61 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:teachers-block.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/teachers");
        // line 4
        echo "
<div class=\"panel panel-default\" id=\"class-teacher-column\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"> 
      <i class=\"es-icon es-icon-assignmentind\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("班主任"), "html", null, true);
        echo "
    </h3>
  </div>
  <div class=\"panel-body\">
    ";
        // line 12
        if ((isset($context["headTeacher"]) ? $context["headTeacher"] : null)) {
            // line 13
            echo "    <div class=\"media media-default\">
      <div class=\"media-left\">
        ";
            // line 15
            echo $context["web_macro"]->getuser_avatar((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "", "avatar-md");
            echo "
      </div>
      
      <div class=\"media-body\">
        <div class=\"title\">
          ";
            // line 20
            echo $context["web_macro"]->getuser_link((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "link-light");
            echo "
        </div>
        ";
            // line 22
            if ((($this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array()), "")) : (""))) {
                // line 23
                echo "          <div class=\"content\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["headTeacher"]) ? $context["headTeacher"] : null), "title", array()), "html", null, true);
                echo "</div>
        ";
            } else {
                // line 25
                echo "          <div class=\"content\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("还没有头衔"), "html", null, true);
                echo "</div>
        ";
            }
            // line 27
            echo "      </div>
    </div>
    ";
        } else {
            // line 30
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该%name%尚未设置班主任", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
    ";
        }
        // line 32
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:teachers-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 32,  77 => 30,  72 => 27,  66 => 25,  60 => 23,  58 => 22,  53 => 20,  45 => 15,  41 => 13,  39 => 12,  32 => 8,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
