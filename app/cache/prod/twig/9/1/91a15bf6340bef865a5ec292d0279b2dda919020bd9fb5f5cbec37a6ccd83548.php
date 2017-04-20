<?php

/* TopxiaAdminBundle:LiveCourse:tab.html.twig */
class __TwigTemplate_91a15bf6340bef865a5ec292d0279b2dda919020bd9fb5f5cbec37a6ccd83548 extends Twig_Template
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
        echo "<div class=\"btn-group\">
<a href=\" ";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "coming"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : null) == "coming")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("即将开始的"), "html", null, true);
        echo "</a>
<a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "underway"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : null) == "underway")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前进行中"), "html", null, true);
        echo "</a>
<a href=\" ";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("admin_live_course", array("status" => "end"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["status"]) ? $context["status"] : null) == "end")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已结束的"), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  32 => 3,  22 => 2,  19 => 1,);
    }
}
