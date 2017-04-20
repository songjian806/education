<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyPlace/my-course.html.twig */
class __TwigTemplate_a592c0941fb7ee47c2904f1f28823a0143a249814c48e82325d83caafa640757 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:ListContent/StudyPlace/my-course.html.twig", 1);
        $this->blocks = array(
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["esBarMenu"] = "course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myStudyPlace($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 5
            echo "  <!-- 课程 -->
  <div class=\"course-list\">
    ";
            // line 7
            $context["courseCount"] = 15;
            // line 8
            echo "    ";
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
                echo "      ";
                $context["courseCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 10
                echo "      <div class=\"course-item\">
        <div class=\"course-img\">
          <a target=\"_blank\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
            <img class=\"transform img-responsive\" src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\">
          </a>
        </div>
        <div class=\"progress progress-xs\">
          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "percent", array()), "html", null, true);
                echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "percent", array()), "html", null, true);
                echo "%\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"\" data-original-title=\"40%\">
          </div>
        </div>
        <div class=\"course-info\">
          <div class=\"title\">
            <a target=\"_blank\" class=\"link-dark\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
              ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "
            </a>
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
            // line 29
            echo "    ";
            if (((isset($context["courseCount"]) ? $context["courseCount"] : null) >= 15)) {
                // line 30
                echo "      <p class=\"text-center\"><a class=\"link-light\" href=\"";
                echo $this->env->getExtension('routing')->getPath("my_courses_learning");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i></a></p>
    ";
            }
            // line 32
            echo "  </div>
";
        } else {
            // line 34
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无课程"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyPlace/my-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  123 => 32,  115 => 30,  112 => 29,  92 => 23,  88 => 22,  78 => 17,  71 => 13,  67 => 12,  63 => 10,  60 => 9,  42 => 8,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
