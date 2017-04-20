<?php

/* TopxiaAdminBundle:Default:unsolved-questions-block.html.twig */
class __TwigTemplate_9756ce0d0aed86f3405a0973f89f9b6bc742b3f7120455641bbbe17dc3989cf2 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig", 1);
        // line 2
        echo "
  \t";
        // line 3
        if ((isset($context["questions"]) ? $context["questions"] : null)) {
            // line 4
            echo "      <table class=\"table table-condensed table-noborder table-overflow\" style=\"margin-bottom:0\">
        <thead>
          <tr>
            <th width=\"60%\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("问题"), "html", null, true);
            echo "</th>
            <th width=\"20%\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看数"), "html", null, true);
            echo "</th>
            <th width=\"20%\">";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody class=\"tbody\">
          ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 14
                echo "            ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
                // line 15
                echo "  \t        <tr>
  \t          <td>
                <a class=\"link-primary\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                  ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
                echo "
                </a>
  \t          </td>
              <td class=\"pull-right prl\">
                ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
              </td>
  \t          <td>
  \t          \t";
                // line 25
                if ((isset($context["course"]) ? $context["course"] : null)) {
                    // line 26
                    echo "  \t\t\t          <button class=\"btn btn-default btn-xs js-remind-teachers\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "questionId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提醒教师"), "html", null, true);
                    echo "</button>
  \t\t          ";
                }
                // line 28
                echo "  \t\t        </td>
  \t        </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </tbody>
        </table>
    ";
        } else {
            // line 34
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无最新未回复问答"), "html", null, true);
            echo "</div>
    ";
        }
        // line 36
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:unsolved-questions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  97 => 34,  92 => 31,  84 => 28,  76 => 26,  74 => 25,  68 => 22,  61 => 18,  57 => 17,  53 => 15,  50 => 14,  46 => 13,  39 => 9,  35 => 8,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
