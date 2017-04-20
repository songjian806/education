<?php

/* TopxiaWebBundle:Course:courses-block-list.html.twig */
class __TwigTemplate_685792a28f5b72c54c11c1a405916ce207aa5634588d5fbc60b426f5c75f46c8 extends Twig_Template
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
        echo "<div class=\"course-list\">
  <div class=\"row\">
    ";
        // line 3
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
            // line 4
            echo "      <div class=\"col-lg-3 col-md-4 col-xs-6\">
        <div class=\"course-item\">
          <div class=\"course-img\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
              ";
            // line 8
            if (($this->getAttribute($context["course"], "discountId", array()) > 0)) {
                // line 9
                echo "                ";
                if (($this->getAttribute($context["course"], "discount", array()) == 0)) {
                    // line 10
                    echo "                  <!-- 限免 -->
                  <span class=\"tag-discount free\"></span>
                ";
                } else {
                    // line 13
                    echo "                  <!-- 折扣 -->
                  <span class=\"tag-discount\"></span>
                ";
                }
                // line 16
                echo "              ";
            }
            // line 17
            echo "              ";
            if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                // line 18
                echo "                <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
              ";
            } elseif (($this->getAttribute(            // line 19
$context["course"], "serializeMode", array()) == "finished")) {
                // line 20
                echo "                <span class=\"tags\"><span class=\"tag-finished\"></span></span>
              ";
            }
            // line 22
            echo "              ";
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 23
                echo "                <span class=\"tags\">
                  <span class=\"tag-live\"></span>
                </span>
              ";
            }
            // line 27
            echo "              <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">
            </a>
          </div>
          <div class=\"course-info\">
            <div class=\"title\">
              <a class=\"link-dark\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "
              </a>
            </div>
            <div class=\"metas clearfix\">
              ";
            // line 37
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.show_student_num_enabled", "1") == 1)) {
                // line 38
                echo "              <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</span>
              ";
            }
            // line 40
            echo "              <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "ratingNum", array()), "html", null, true);
            echo "</span>
              ";
            // line 41
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:courses-block-list.html.twig", 41)->display(array_merge($context, array("shows" => "price")));
            // line 42
            echo "            </div>
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
        // line 47
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:courses-block-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  125 => 42,  123 => 41,  118 => 40,  112 => 38,  110 => 37,  103 => 33,  99 => 32,  88 => 27,  82 => 23,  79 => 22,  75 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  59 => 13,  54 => 10,  51 => 9,  49 => 8,  45 => 7,  40 => 4,  23 => 3,  19 => 1,);
    }
}
