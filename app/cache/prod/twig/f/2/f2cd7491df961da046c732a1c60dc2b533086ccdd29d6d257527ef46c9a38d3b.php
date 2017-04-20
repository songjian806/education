<?php

/* TopxiaWebBundle:CourseLesson/Part:lesson.html.twig */
class __TwigTemplate_f2cd7491df961da046c732a1c60dc2b533086ccdd29d6d257527ef46c9a38d3b extends Twig_Template
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
        if ((isset($context["member"]) ? $context["member"] : null)) {
            // line 2
            echo "  ";
            $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) . "#lesson/") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        } else {
            // line 4
            echo "  ";
            $context["lessonUrl"] = (((isset($context["previewUrl"]) ? $context["previewUrl"] : null) . "?lessonId=") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()));
        }
        // line 6
        echo "<li class=\"period lesson-item lesson-item-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), "html", null, true);
        echo "\" data-num=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()), "html", null, true);
        echo "\">
  ";
        // line 7
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 8
            echo "    ";
            if (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "free", array()) || (isset($context["member"]) ? $context["member"] : null)) || $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array())) || $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()))) {
                // line 9
                echo "      <a 
      ";
                // line 10
                if ((isset($context["member"]) ? $context["member"] : null)) {
                    // line 11
                    echo "        ";
                    if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "live") && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "endTime", array()) > $this->env->getExtension('topxia_web_twig')->timestamp()))) {
                        // line 12
                        echo "          href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_play", array("courseId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()))), "html", null, true);
                        echo "\" 
          target=\"_blank\" 
        ";
                    } else {
                        // line 15
                        echo "          href=\"";
                        echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                        echo "\" 
        ";
                    }
                    // line 17
                    echo "      ";
                } else {
                    // line 18
                    echo "        href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    echo twig_escape_filter($this->env, (isset($context["lessonUrl"]) ? $context["lessonUrl"] : null), "html", null, true);
                    echo "\"
      ";
                }
                // line 20
                echo "      title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
                echo "\">
      ";
                // line 21
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 21)->display($context);
                // line 22
                echo "      <span class=\"title\">  ";
                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                    echo "：";
                }
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
                echo "</span>
      ";
                // line 23
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 23)->display($context);
                // line 24
                echo "      </a>
    ";
            } else {
                // line 26
                echo "      ";
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 26)->display($context);
                // line 27
                echo "      <span class=\"title\">  ";
                if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                    echo "：";
                }
                echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
                echo "</span>
      ";
                // line 28
                $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 28)->display($context);
                // line 29
                echo "    ";
            }
            // line 30
            echo "  ";
        } else {
            // line 31
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:status-ball.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 31)->display($context);
            // line 32
            echo "    <span class=\"title\">";
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "number", array()), "html", null, true);
                echo "：";
            }
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array());
            echo "</span>
    ";
            // line 33
            $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig", "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", 33)->display($context);
            // line 34
            echo "  ";
        }
        // line 35
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:lesson.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 35,  135 => 34,  133 => 33,  122 => 32,  119 => 31,  116 => 30,  113 => 29,  111 => 28,  100 => 27,  97 => 26,  93 => 24,  91 => 23,  80 => 22,  78 => 21,  73 => 20,  67 => 18,  64 => 17,  58 => 15,  51 => 12,  48 => 11,  46 => 10,  43 => 9,  40 => 8,  38 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
