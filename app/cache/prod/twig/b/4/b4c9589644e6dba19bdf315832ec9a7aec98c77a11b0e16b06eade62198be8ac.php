<?php

/* expression.twig */
class __TwigTemplate_b4c9589644e6dba19bdf315832ec9a7aec98c77a11b0e16b06eade62198be8ac extends Twig_Template
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
        echo twig_escape_filter($this->env, ( !($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright", false) == 1) &&  !$this->env->getExtension('topxia_web_twig')->isWithoutNetwork()), "html", null, true);
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
