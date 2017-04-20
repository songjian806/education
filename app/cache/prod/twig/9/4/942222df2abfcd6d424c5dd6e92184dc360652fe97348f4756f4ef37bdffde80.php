<?php

/* TopxiaWebBundle:EsBar:ListContent/study-place.html.twig */
class __TwigTemplate_942222df2abfcd6d424c5dd6e92184dc360652fe97348f4756f4ef37bdffde80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
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

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("我的课程/%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_esBarBody($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("esbar_my_course");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : null), "")) : ("")) != "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-course-btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课程"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("esbar_my_classroom");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : null), "")) : ("")) == "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-classroom-btn\">";
        // line 13
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    ";
        // line 18
        $this->displayBlock('myStudyPlace', $context, $blocks);
        // line 20
        echo "  </div>
";
    }

    // line 18
    public function block_myStudyPlace($context, array $blocks = array())
    {
        // line 19
        echo "    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  82 => 18,  77 => 20,  75 => 18,  67 => 13,  59 => 12,  55 => 11,  47 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
