<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyCenter/user.html.twig */
class __TwigTemplate_568ff5b651a791b26b987c2c702275f76f44a7883d58d16c0c939901978fded4 extends Twig_Template
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
        echo "<div class=\"bar-user-center\">
  <a target=\"_blank\" href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\" ><img class=\"avatar-md\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\"></a>
  <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyCenter/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }
}
