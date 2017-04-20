<?php

/* TopxiaWebBundle:Default:recommend-classroom.html.twig */
class __TwigTemplate_fc44198c7e0c942543b764f82f9831d8d9cc02b6dd7fb8753b8239745ae9c88c extends Twig_Template
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
        echo "
<!-- 推荐班级 -->
";
        // line 3
        $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendClassrooms", array("count" => (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 4)) : (4))));
        // line 4
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 5
            echo "  <section class=\"class-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->env->getExtension('translator')->trans("推荐班级"))) : ($this->env->getExtension('translator')->trans("推荐班级"))), "html", null, true);
            echo "</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"recommend-class-list row\">
        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 16
                echo "          <div class=\"col-md-3 col-xs-6\">
             ";
                // line 17
                $this->loadTemplate("ClassroomBundle:Classroom:class-grid.html.twig", "TopxiaWebBundle:Default:recommend-classroom.html.twig", 17)->display($context);
                // line 18
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
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
        return "TopxiaWebBundle:Default:recommend-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  88 => 22,  84 => 20,  69 => 18,  67 => 17,  64 => 16,  47 => 15,  41 => 12,  35 => 9,  27 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
