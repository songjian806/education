<?php

/* TopxiaWebBundle:EsBar:ListContent/Practice/practice.html.twig */
class __TwigTemplate_59f31056c15fde6b847e4bfa444b5728800a8d4cc58d34d316e031913826b968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/practice.html.twig", "TopxiaWebBundle:EsBar:ListContent/Practice/practice.html.twig", 1);
        $this->blocks = array(
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:ListContent/practice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["esBarMenu"] = (isset($context["status"]) ? $context["status"] : null);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_myPractice($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"text-line gray small\">
  <h5><span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("考试"), "html", null, true);
        echo "</span></h5>
  <div class=\"line\"></div>
</div>

<ul class=\"list-unstyled\">
  ";
        // line 10
        if ((isset($context["testPaperResults"]) ? $context["testPaperResults"] : null)) {
            // line 11
            echo "    ";
            $context["testCount"] = 10;
            // line 12
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["testPaperResults"]) ? $context["testPaperResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["testPaperResult"]) {
                // line 13
                echo "      ";
                $context["testCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 14
                echo "      <li><i class=\"es-icon es-icon-chevronright\"></i><a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => $this->getAttribute($context["testPaperResult"], "id", array()))), "html", null, true);
                echo "\" class=\"link-light\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["testPaperResult"], "paperName", array()), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testPaperResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    ";
            if (((isset($context["testCount"]) ? $context["testCount"] : null) >= 10)) {
                // line 17
                echo "      <li class=\"text-center\">
        <a class=\"link-light\" href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("my_quiz");
                echo "\" target=\"_blank\">
          ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i>
        </a>
      </li>
    ";
            }
            // line 23
            echo "  ";
        } else {
            // line 24
            echo "    <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无考试"), "html", null, true);
            echo "</li>
  ";
        }
        // line 26
        echo "</ul>

<div class=\"text-line gray small\">
  <h5><span>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作业"), "html", null, true);
        echo "</span></h5>
  <div class=\"line\"></div>
</div>

<ul class=\"list-unstyled\">
";
        // line 34
        if ((isset($context["homeworkResults"]) ? $context["homeworkResults"] : null)) {
            // line 35
            echo "  ";
            $context["homeworkCount"] = 10;
            // line 36
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["homeworkResults"]) ? $context["homeworkResults"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["homeworkResult"]) {
                // line 37
                echo "    ";
                $context["homeworkCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 38
                echo "    ";
                $context["lesson"] = $this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["homeworkResult"], "lessonId", array()), array(), "array");
                // line 39
                echo "    ";
                $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["homeworkResult"], "courseId", array()), array(), "array");
                // line 40
                echo "    ";
                $context["lessonUrl"] = (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) . "#lesson/") . $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()));
                // line 41
                echo "    <li>
      <i class=\"es-icon es-icon-chevronright\"></i>
      <a target=\"_blank\" class=\"link-light\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_result", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "homeworkId" => $this->getAttribute($context["homeworkResult"], "homeworkId", array()), "resultId" => $this->getAttribute($context["homeworkResult"], "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                echo "\">
      
        ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%title%第%number%课时", array("%title%" => (("《" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array())) . "》"), "%number%" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()))), "html", null, true);
                echo "
      </a>
    </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['homeworkResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "  ";
            if (((isset($context["homeworkCount"]) ? $context["homeworkCount"] : null) >= 10)) {
                // line 50
                echo "    <li class=\"text-center\">
      <a class=\"link-light\" href=\"";
                // line 51
                echo $this->env->getExtension('routing')->getPath("my_homework_list");
                echo "\" target=\"_blank\">
        ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
                echo "<i class=\"es-icon es-icon-angledoubleright\"></i>
      </a>
    </li>
  ";
            }
        } else {
            // line 57
            echo "  <li class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无作业"), "html", null, true);
            echo "</li>
";
        }
        // line 59
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/Practice/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 59,  209 => 57,  201 => 52,  197 => 51,  194 => 50,  191 => 49,  173 => 45,  168 => 43,  164 => 41,  161 => 40,  158 => 39,  155 => 38,  152 => 37,  134 => 36,  131 => 35,  129 => 34,  121 => 29,  116 => 26,  110 => 24,  107 => 23,  100 => 19,  96 => 18,  93 => 17,  90 => 16,  71 => 14,  68 => 13,  50 => 12,  47 => 11,  45 => 10,  37 => 5,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
