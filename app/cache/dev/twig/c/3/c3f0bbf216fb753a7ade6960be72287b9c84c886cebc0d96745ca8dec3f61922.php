<?php

/* TopxiaWebBundle::site-hint.html.twig */
class __TwigTemplate_c3f0bbf216fb753a7ade6960be72287b9c84c886cebc0d96745ca8dec3f61922 extends Twig_Template
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
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || ((isset($context["hideSetupHint"]) ? $context["hideSetupHint"] : $this->getContext($context, "hideSetupHint")) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle::email-setting.html.twig", "TopxiaWebBundle::site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle:Announcement:announcement.html.twig", "TopxiaWebBundle::site-hint.html.twig", 4)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
