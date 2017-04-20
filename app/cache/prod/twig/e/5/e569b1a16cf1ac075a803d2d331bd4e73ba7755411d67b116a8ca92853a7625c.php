<?php

/* TopxiaWebBundle:Course:normal-show.html.twig */
class __TwigTemplate_e569b1a16cf1ac075a803d2d331bd4e73ba7755411d67b116a8ca92853a7625c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:normal-show.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "overview";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("course/show");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"course-detail-content\">

\t\t";
        // line 11
        if ( !(isset($context["member"]) ? $context["member"] : null)) {
            // line 12
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程介绍"), "html", null, true);
            echo "
        </div>
        <div class=\"piece-body p-lg clearfix\">
          ";
            // line 17
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
                // line 18
                echo "            ";
                echo $this->env->getExtension('topxia_web_twig')->cdn($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array()));
                echo "
          ";
            } else {
                // line 20
                echo "            <div class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课程简介"), "html", null, true);
                echo "</div>
          ";
            }
            // line 22
            echo "        </div>
      </div>

      ";
            // line 25
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array())) {
                // line 26
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            ";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程目标"), "html", null, true);
                echo "
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 32
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                    // line 33
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 34
                    echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array())) {
                // line 43
                echo "        <div class=\"es-piece\">
          <div class=\"piece-header\">
            ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("适合人群"), "html", null, true);
                echo "
          </div>
          <div class=\"piece-body\">
            <ul class=\"piece-body-list\">
              ";
                // line 49
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                    // line 50
                    echo "              <li>
                <i class=\"es-icon es-icon-chevronright\"></i> ";
                    // line 51
                    echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                    echo "
              </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "            </ul>
          </div>
        </div>
      ";
            }
            // line 58
            echo "
    ";
        } else {
            // line 60
            echo "\t\t\t<div class=\"es-piece\">
\t      <div class=\"piece-body\">
\t        ";
            // line 62
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "member" => (isset($context["member"]) ? $context["member"] : null), "previewUrl" => $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))))));
            echo "
\t        
\t      </div>
\t    </div>
    ";
        }
        // line 67
        echo "    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 67,  153 => 62,  149 => 60,  145 => 58,  139 => 54,  130 => 51,  127 => 50,  123 => 49,  116 => 45,  112 => 43,  110 => 42,  107 => 41,  101 => 37,  92 => 34,  89 => 33,  85 => 32,  78 => 28,  74 => 26,  72 => 25,  67 => 22,  61 => 20,  55 => 18,  53 => 17,  47 => 14,  43 => 12,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
