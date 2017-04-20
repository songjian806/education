<?php

/* expression.twig */
class __TwigTemplate_76e693cad352b706ba55ccb6191ba09094096ee14178a626b07fe312a1dcea51 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()), array(0 => "closed", 1 => "draft")), "html", null, true);
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
