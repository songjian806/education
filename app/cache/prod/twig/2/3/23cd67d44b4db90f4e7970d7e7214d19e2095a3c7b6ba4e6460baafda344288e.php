<?php

/* ClassroomBundle:Classroom/Part/Service:liveAnswer.html.twig */
class __TwigTemplate_23cd67d44b4db90f4e7970d7e7214d19e2095a3c7b6ba4e6460baafda344288e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("一对一在线答疑"), "html", null, true);
        echo " ";
        if ( !(isset($context["active"]) ? $context["active"] : null)) {
            echo "<small class='text-muted'>(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂未提供"), "html", null, true);
            echo ")</span>";
        }
        echo "\" data-content=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提供专属的一对一在线答疑，快速答疑解惑"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("疑"), "html", null, true);
        echo "</a>
</li>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part/Service:liveAnswer.html.twig";
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
