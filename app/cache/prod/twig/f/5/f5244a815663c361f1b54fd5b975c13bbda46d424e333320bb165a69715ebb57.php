<?php

/* ClassroomBundle:Classroom/Part/Service:testpaperReview.html.twig */
class __TwigTemplate_f5244a815663c361f1b54fd5b975c13bbda46d424e333320bb165a69715ebb57 extends Twig_Template
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
        echo "<li class=\"";
        if ((isset($context["active"]) ? $context["active"] : null)) {
            echo "active";
        }
        echo "\">
  <a tabindex=\"0\" role=\"button\" data-container=\"body\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-html=\"true\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("24小时阅卷点评"), "html", null, true);
        echo " ";
        if ( !(isset($context["active"]) ? $context["active"] : null)) {
            echo "<small class='text-muted'>(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂未提供"), "html", null, true);
            echo ")</span>";
        }
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("24小时内批阅您提交的试卷，给予有针对性的点评"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("试"), "html", null, true);
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:testpaperReview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  19 => 1,);
    }
}
