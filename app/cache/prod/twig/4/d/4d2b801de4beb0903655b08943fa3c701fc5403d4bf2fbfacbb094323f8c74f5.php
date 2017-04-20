<?php

/* TopxiaWebBundle:Thread/Part:post-form.html.twig */
class __TwigTemplate_4d2b801de4beb0903655b08943fa3c701fc5403d4bf2fbfacbb094323f8c74f5 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发表回复"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:post", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))));
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:post-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
