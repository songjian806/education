<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyPlace/my-classroom.html.twig */
class __TwigTemplate_8ccc829db6995f864926c425d646dfb040215300672488070b0308557858e228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar:ListContent/StudyPlace/my-classroom.html.twig", 1);
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
        // line 3
        $context["esBarMenu"] = "classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_myStudyPlace($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 7
            echo "  <!-- 班级 -->
  <div class=\"recommend-class-list\">
    ";
            // line 9
            $context["classroomCount"] = 15;
            // line 10
            echo "    ";
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
                // line 11
                echo "      ";
                $context["classroomCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 12
                echo "      <div class=\"class-item\">
        <div class=\"class-img-wrap\">
          <a class=\"class-img\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">
            <img class=\"img-responsive\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
          </a>
          <div class=\"mask\">
            <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("立即加入"), "html", null, true);
                echo "</a>
          </div>
        </div>
        <h3><a class=\"link-dark\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a></h3>
        <div class=\"metas\">";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("共%courseNum%门课程", array("%courseNum%" => $this->getAttribute($context["classroom"], "courseNum", array()))), "html", null, true);
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
            if (((isset($context["classroomCount"]) ? $context["classroomCount"] : null) >= 15)) {
                // line 26
                echo "      <p class=\"text-center\"><a class=\"link-light\" href=\"";
                echo $this->env->getExtension('routing')->getPath("my_classrooms");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i></a></p>
    ";
            }
            // line 28
            echo "  </div>
";
        } else {
            // line 30
            echo "  <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyPlace/my-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 30,  124 => 28,  116 => 26,  113 => 25,  96 => 22,  90 => 21,  82 => 18,  74 => 15,  70 => 14,  66 => 12,  63 => 11,  45 => 10,  43 => 9,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
    }
}
