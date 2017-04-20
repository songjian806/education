<?php

/* ClassroomBundle:Classroom/Course:list.html.twig */
class __TwigTemplate_f5298c5841b39e79b931703b5608d27cbe37fca17d6a8d357930a9c43f9e6e96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom/Course:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        // line 4
        $context["nav"] = "course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/course/list");
        // line 7
        echo "  <div class=\"class-course-list\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
            // line 9
            echo "      <div class=\"course-item\">
        <div class=\"media\">
          <a class=\"media-left\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 12
            echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "", "");
            echo "
          </a>
          <div class=\"media-body\">
            <div class=\"title\">
              <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a>
            </div>
            <div class=\"score\">
              ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "star", array(0 => $this->getAttribute($context["course"], "rating", array())), "method"), "html", null, true);
            echo "
            </div>
            <div class=\"price hidden-xs\">
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原价："), "html", null, true);
            $this->loadTemplate("TopxiaWebBundle:Course/Widget:course-price.html.twig", "ClassroomBundle:Classroom/Course:list.html.twig", 22)->display(array_merge($context, array("shows" => array(0 => "originPrice"))));
            // line 23
            echo "            </div>
            <span class=\"course-show\">
              <i class=\"es-icon es-icon-keyboardarrowdown\" data-lesson-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classrom_course_lessons_list", array("courseId" => $this->getAttribute($context["course"], "id", array()), "classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\"></i>
            </span>
          </div>
        </div>

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
        // line 32
        echo "    
  </div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Course:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  106 => 25,  102 => 23,  99 => 22,  93 => 19,  85 => 16,  78 => 12,  74 => 11,  70 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  39 => 3,  33 => 2,  29 => 1,  27 => 4,  11 => 1,);
    }
}
