<?php

/* TopxiaWebBundle:Course:related-courses-block.html.twig */
class __TwigTemplate_35fc919d34f76d0405093adb892ded0599a6d7bcc55e4a57ac78ffc68f003b37 extends Twig_Template
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
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 2
            $this->env->getExtension('topxia_web_twig')->loadScript("course/related-courses-block");
            // line 3
            echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\"><i class=\"es-icon es-icon-explore\"></i>";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("相关课程"), "html", null, true);
            echo "</h3>
  </div>
  <div class=\"panel-body\">
    <div class=\"course-list no-shadow no-margin\">
      <div class=\"row\">
        ";
            // line 10
            $context["key"] = 0;
            // line 11
            echo "        ";
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
                // line 12
                echo "          ";
                if ((((isset($context["key"]) ? $context["key"] : null) < 3) && ($this->getAttribute((isset($context["currentCourse"]) ? $context["currentCourse"] : null), "id", array()) != $this->getAttribute($context["course"], "id", array())))) {
                    // line 13
                    echo "          ";
                    $context["key"] = ((isset($context["key"]) ? $context["key"] : null) + 1);
                    // line 14
                    echo "          <div class=\"col-lg-4 col-md-6 col-xs-6 ";
                    if (((isset($context["key"]) ? $context["key"] : null) > 2)) {
                        echo "hidden-sm hidden-xs";
                    }
                    echo "\">
            ";
                    // line 15
                    $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:related-courses-block.html.twig", 15)->display($context);
                    // line 16
                    echo "          </div>
          ";
                }
                // line 18
                echo "        ";
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
            // line 19
            echo "      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:related-courses-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  74 => 18,  70 => 16,  68 => 15,  61 => 14,  58 => 13,  55 => 12,  37 => 11,  35 => 10,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
