<?php

/* TopxiaWebBundle:EsBar:LeftList/study-center.html.twig */
class __TwigTemplate_7ed3c1ba6110ccfcad73233c25a5edc1785e967ceeaf8c47911c5267ec20c395 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  ";
            $context["recentLiveLessons"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveLessons", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "count" => 2));
            // line 3
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('translator')->trans("学<br>习<br>中<br>心");
            echo "
      ";
            // line 5
            if ((isset($context["recentLiveLessons"]) ? $context["recentLiveLessons"] : null)) {
                // line 6
                echo "        <span class=\"dot\"></span>
      ";
            }
            // line 8
            echo "    </a>
  </li>
";
        } else {
            // line 11
            echo "  <li data-id=\"#bar-user-center\" class=\"bar-user\">
    <a href=\"javascript:;\" data-url=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("esbar_my_study_center");
            echo "\">";
            echo $this->env->getExtension('translator')->trans("学<br>习<br>中<br>心");
            echo "</a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/study-center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  44 => 11,  39 => 8,  35 => 6,  33 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
