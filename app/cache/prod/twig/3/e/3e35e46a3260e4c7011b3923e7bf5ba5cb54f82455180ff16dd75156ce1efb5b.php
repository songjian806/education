<?php

/* TopxiaWebBundle:OpenCourse:recommend-course-list.html.twig */
class __TwigTemplate_3e35e46a3260e4c7011b3923e7bf5ba5cb54f82455180ff16dd75156ce1efb5b extends Twig_Template
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
        $context["recommendCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendOpenCourses", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "count" => 5));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommendCourses"]) ? $context["recommendCourses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 4
                echo "\t";
                if ((($this->getAttribute($context["course"], "type", array()) == "open") || ($this->getAttribute($context["course"], "type", array()) == "liveOpen"))) {
                    // line 5
                    echo "\t\t";
                    $context["showUrl"] = $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array())));
                    // line 6
                    echo "\t";
                } else {
                    // line 7
                    echo "\t\t";
                    $context["showUrl"] = $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array())));
                    // line 8
                    echo "\t";
                }
                // line 9
                echo "
\t<li class=\"tab-recommand clearfix\">
\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\"><img class=\"img-responsive\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((($this->getAttribute($context["course"], "smallPicture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "smallPicture", array()), "")) : ("")), "course.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\"></a>
\t\t<div class=\"open-course-info\">
\t\t  <a class=\"title\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
\t\t  <div class=\"num\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "人在学习</div>
\t\t</div>
\t</li>
";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 18
            echo "\t<li><div class=\"empty\">暂无推荐课程</div></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:recommend-course-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  68 => 14,  60 => 13,  49 => 11,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
