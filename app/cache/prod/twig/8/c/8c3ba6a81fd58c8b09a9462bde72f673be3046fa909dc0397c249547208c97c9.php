<?php

/* expression.twig */
class __TwigTemplate_8c3ba6a81fd58c8b09a9462bde72f673be3046fa909dc0397c249547208c97c9 extends Twig_Template
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
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : null) == "normal") && $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())), "html", null, true);
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
