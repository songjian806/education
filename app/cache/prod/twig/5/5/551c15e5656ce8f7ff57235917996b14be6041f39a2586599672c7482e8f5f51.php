<?php

/* TopxiaWebBundle:Player:stylesheet.html.twig */
class __TwigTemplate_551c15e5656ce8f7ff57235917996b14be6041f39a2586599672c7482e8f5f51 extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
        echo "\" />

";
        // line 5
        if (((isset($context["player"]) ? $context["player"] : null) == "balloon-cloud-video-player")) {
            // line 6
            echo "<link rel=\"stylesheet\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/balloon-video-player/1.3.0/src/skin/video-js.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" media=\"screen\" href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/balloon-video-player/1.3.0/src/skin/pluck.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\">
";
        }
        // line 9
        echo "
<style type=\"text/css\">
  .lesson-content-audio {
    padding-top: 10%;
    text-align: center;
  }
</style>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Player:stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 7,  35 => 6,  33 => 5,  28 => 3,  24 => 2,  19 => 1,);
    }
}
