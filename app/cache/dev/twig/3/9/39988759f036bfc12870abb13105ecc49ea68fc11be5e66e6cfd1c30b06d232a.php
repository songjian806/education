<?php

/* TopxiaWebBundle:Default:open-course.html.twig */
class __TwigTemplate_39988759f036bfc12870abb13105ecc49ea68fc11be5e66e6cfd1c30b06d232a extends Twig_Template
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
        echo "<section class=\"course-list-section open-course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"open-course-list-section\">
  ";
        // line 2
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:open-course.html.twig", 2);
        // line 3
        echo "
  ";
        // line 4
        $context["count"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 12)) : (12));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        $context["courses"] = $this->env->getExtension('topxia_data_twig')->getData("OpenCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy"))));
        // line 7
        echo "
  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()), "")) : ("")))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 11
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), "随时随地，免费听课。")) : ("随时随地，免费听课。")), "html", null, true);
        echo "</div>
    </div>
 
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
            // line 17
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 18
            $this->loadTemplate("TopxiaWebBundle:OpenCourse/Widget:open-course-grid.html.twig", "TopxiaWebBundle:Default:open-course.html.twig", 18)->display($context);
            // line 19
            echo "          </div>
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
        // line 21
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("open_course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多公开课"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:open-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  96 => 24,  91 => 21,  76 => 19,  74 => 18,  71 => 17,  54 => 16,  46 => 11,  42 => 10,  37 => 7,  34 => 6,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
