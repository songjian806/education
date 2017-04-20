<?php

/* @root\src\Topxia\WebBundle\Extensions\StatusTemplate\become_student.tpl.html.twig */
class __TwigTemplate_9f73df112cb9d1f4827dee445b8e79071fca35d5dc69ea9775eb23295c16c585 extends Twig_Template
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
        $context["props"] = $this->getAttribute((isset($context["status"]) ? $context["status"] : null), "properties", array());
        // line 2
        echo "
";
        // line 3
        if (((isset($context["mode"]) ? $context["mode"] : null) == "simple")) {
            // line 4
            echo "\t";
            if (($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "objectType", array()) == "course")) {
                // line 5
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入课程"), "html", null, true);
                echo " <a  class=\"link-dark\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("来自《%props%》", array("%props%" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "title", array()))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "course", array()), "title", array()), 15);
                echo "</a>
\t";
            } else {
                // line 7
                echo "\t\t";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入%classroom%", array("%classroom%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
                echo " <a  class=\"link-dark\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "classroom", array()), "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("来自《%props%》", array("%props%" => $this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "classroom", array()), "title", array()))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["props"]) ? $context["props"] : null), "classroom", array()), "title", array()), 15);
                echo "</a>
\t";
            }
            // line 9
            echo "  
";
        } elseif ((        // line 10
(isset($context["mode"]) ? $context["mode"] : null) == "full")) {
            // line 11
            echo "\t";
            if (($this->getAttribute((isset($context["status"]) ? $context["status"] : null), "objectType", array()) == "course")) {
                // line 12
                echo "\t\t
\t";
            } else {
                // line 14
                echo "\t\t
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\StatusTemplate\\become_student.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 14,  61 => 12,  58 => 11,  56 => 10,  53 => 9,  41 => 7,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
