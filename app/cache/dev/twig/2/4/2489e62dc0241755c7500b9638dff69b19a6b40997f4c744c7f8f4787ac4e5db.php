<?php

/* TopxiaWebBundle:Default:live-course.html.twig */
class __TwigTemplate_2489e62dc0241755c7500b9638dff69b19a6b40997f4c744c7f8f4787ac4e5db extends Twig_Template
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
        $context["RecentLiveCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveCourses", array("count" => 4));
        // line 2
        if ((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : $this->getContext($context, "RecentLiveCourses"))) {
            // line 3
            echo "  <section class=\"live-course-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"course-list\"> 
        <div class=\"row\"> 
          ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : $this->getContext($context, "RecentLiveCourses")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                echo " 
            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              ";
                // line 13
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:live-course.html.twig", 13)->display(array_merge($context, array("course" => $context["course"])));
                echo " 

              ";
                // line 15
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 16
                echo "              ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array())))) {
                    // line 17
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在直播"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                } else {
                    // line 26
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                }
                // line 35
                echo "
            </div>
          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
          ";
            // line 39
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, (isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : $this->getContext($context, "RecentLiveCourses"))));
            // line 40
            echo "          ";
            if (((isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : $this->getContext($context, "emptyCourseNum")) > 0)) {
                // line 41
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : $this->getContext($context, "emptyCourseNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("敬请期待"), "html", null, true);
                    echo "
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "          ";
            }
            // line 56
            echo "        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("live_course_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多直播"), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:live-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 60,  157 => 59,  152 => 56,  149 => 55,  134 => 46,  128 => 42,  123 => 41,  120 => 40,  118 => 39,  115 => 38,  99 => 35,  92 => 31,  85 => 26,  78 => 22,  71 => 17,  68 => 16,  66 => 15,  61 => 13,  41 => 11,  34 => 7,  30 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
