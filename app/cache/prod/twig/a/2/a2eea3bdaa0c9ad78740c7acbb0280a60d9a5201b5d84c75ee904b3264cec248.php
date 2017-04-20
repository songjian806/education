<?php

/* expression.twig */
class __TwigTemplate_a2eea3bdaa0c9ad78740c7acbb0280a60d9a5201b5d84c75ee904b3264cec248 extends Twig_Template
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "normal") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)), "html", null, true);
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
