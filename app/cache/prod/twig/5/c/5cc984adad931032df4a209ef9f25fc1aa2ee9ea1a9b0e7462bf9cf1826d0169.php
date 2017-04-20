<?php

/* TopxiaWebBundle:Partner:message.html.twig */
class __TwigTemplate_5cc984adad931032df4a209ef9f25fc1aa2ee9ea1a9b0e7462bf9cf1826d0169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Default:message.html.twig", "TopxiaWebBundle:Partner:message.html.twig", 1);
        $this->blocks = array(
            'head_scripts' => array($this, 'block_head_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Default:message.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_scripts($context, array $blocks = array())
    {
        echo (isset($context["script"]) ? $context["script"] : null);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Partner:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 1,);
    }
}
