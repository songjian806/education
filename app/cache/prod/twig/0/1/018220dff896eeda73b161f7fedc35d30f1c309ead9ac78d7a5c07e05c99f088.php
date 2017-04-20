<?php

/* TopxiaWebBundle:EsBar:ListContent/study-center.html.twig */
class __TwigTemplate_018220dff896eeda73b161f7fedc35d30f1c309ead9ac78d7a5c07e05c99f088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学习中心"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 9
        echo "  <!-- 用户 -->
  ";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/StudyCenter/user.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", 10)->display($context);
        // line 11
        echo "

  <!-- 直播预告 -->
  ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/StudyCenter/live.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", 14)->display($context);
        // line 15
        echo "
  <!-- 学习任务 -->
  ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-center.html.twig", 17)->display($context);
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  54 => 15,  52 => 14,  47 => 11,  45 => 10,  42 => 9,  39 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
