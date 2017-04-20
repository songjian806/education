<?php

/* expression.twig */
class __TwigTemplate_a60f231ecbbb9cf4f3ea7afe84fe79ed8f2fa90aa292a6a7e7f1969bb2ab27a3 extends Twig_Template
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
        echo twig_escape_filter($this->env,  !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array()), "html", null, true);
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
