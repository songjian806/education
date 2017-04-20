<?php

/* ClassroomBundle:ClassroomThread:create.html.twig */
class __TwigTemplate_f100578fbf783e6c511ac14d8cdf3a48e2e549b1eba29379c1e90e953d5e3e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:ClassroomThread:create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 7
        $context["script_controller"] = "thread/thread-form";
        // line 8
        $context["nav"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["thread"]) ? $context["thread"] : null)) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", (isset($context["type"]) ? $context["type"] : null));
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表"), "html", null, true);
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", (isset($context["type"]) ? $context["type"] : null));
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:create", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "type" => (isset($context["type"]) ? $context["type"] : null))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  53 => 10,  50 => 9,  36 => 5,  32 => 1,  30 => 8,  28 => 7,  26 => 3,  11 => 1,);
    }
}
