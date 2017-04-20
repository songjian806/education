<?php

/* TopxiaAdminBundle:App:app-detail.html.twig */
class __TwigTemplate_04c7807f77ea83046dd8dc083ed3ff326f4e8681754cdc4bc7580c8ab158cbc5 extends Twig_Template
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
        echo "      <tr>
        <td>
          <img src=\"http://open.edusoho.com/files/product/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "icon", array()), "html", null, true);
        echo "\" class=\"app-img pull-left mrl mtm\"/>
          <div class=\"mtm\">

              <h4>
                <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "id", array()), "html", null, true);
        echo "\">
                  <strong class=\"text-primary\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "name", array()), "html", null, true);
        echo "</strong>
                  ";
        // line 9
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "licensed", array())) {
            // line 10
            echo "                  <span class=\"label label-success mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("商业版"), "html", null, true);
            echo "</span>
                  ";
        }
        // line 12
        echo "                  </a>
              </h4>

          </div>

          <div class=\"info mtm mbm clearfix\">
            <div class=\"left-info pull-left\">

              <div class=\"text-muted\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者："), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "developerName", array()), "html", null, true);
        echo "</div>
              <div class=\"mts text-muted\">";
        // line 21
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "type", array()) == "theme")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("主题"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("应用"), "html", null, true);
        }
        // line 22
        echo "              </div>
            </div>

            <div class=\"middle-info pull-left short-long-text\">
              <div class=\"short-text text-muted\">";
        // line 26
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "description", array()), 80);
        echo " <span class=\"trigger\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("展开"), "html", null, true);
        echo ")</span></div>
              <div class=\"long-text text-muted\">";
        // line 27
        echo $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "description", array());
        echo " <span class=\"trigger\">(";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("收起"), "html", null, true);
        echo ")</span></div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:app-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  74 => 26,  68 => 22,  62 => 21,  56 => 20,  46 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
