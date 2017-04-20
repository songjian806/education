<?php

/* expression.twig */
class __TwigTemplate_295b95fa2f1ab10fda57b82381a5f2076482164aa20ccbf53b8d5bb53733ec30 extends Twig_Template
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
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : null) == "normal") &&  !$this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())), "html", null, true);
    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
