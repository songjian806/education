<?php

/* TopxiaWebBundle:CourseLesson/Widget:list.html.twig */
class __TwigTemplate_56216334f41f89ace6e3c0ecdd59fa7be59745e4ce37adc010a1e99c4d53fe46 extends Twig_Template
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
        $context["learnStatuses"] = ((array_key_exists("learnStatuses", $context)) ? (_twig_default_filter((isset($context["learnStatuses"]) ? $context["learnStatuses"] : null), array())) : (array()));
        // line 2
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (_twig_default_filter((isset($context["previewUrl"]) ? $context["previewUrl"] : null), null)) : (null));
        // line 3
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 4
            echo "  <ul class=\"period-list\" id=\"course-item-list\">
  ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
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
            foreach ($context['_seq'] as $context["id"] => $context["item"]) {
                // line 6
                echo "    ";
                if (twig_in_filter("chapter", $context["id"])) {
                    // line 7
                    echo "      ";
                    $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:chapter.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 7)->display($context);
                    // line 8
                    echo "    ";
                } elseif (twig_in_filter("lesson", $context["id"])) {
                    // line 9
                    echo "      ";
                    $this->loadTemplate("TopxiaWebBundle:CourseLesson/Part:lesson.html.twig", "TopxiaWebBundle:CourseLesson/Widget:list.html.twig", 9)->display($context);
                    // line 10
                    echo "    ";
                    // line 14
                    echo "    ";
                }
                // line 15
                echo "  ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Widget:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  59 => 14,  57 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
