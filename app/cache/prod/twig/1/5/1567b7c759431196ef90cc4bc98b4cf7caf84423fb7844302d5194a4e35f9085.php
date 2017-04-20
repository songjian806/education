<?php

/* TopxiaWebBundle::powered-by.html.twig */
class __TwigTemplate_1567b7c759431196ef90cc4bc98b4cf7caf84423fb7844302d5194a4e35f9085 extends Twig_Template
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
        if (((($this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned") && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) != 2)) && $this->env->getExtension('topxia_web_twig')->getSetting("copyright.licenseDomains")) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), twig_split_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.licenseDomains"), ";")))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('routing')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.chuangjietech.com\" target=\"_blank\">CJEdu v";
            echo twig_escape_filter($this->env, twig_constant("\\Topxia\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2016-";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, null, "Y"), "html", null, true);
            echo " ";
            if (( !_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright"), 0) == 2)) {
                echo "<a class=\"mlm\" href=\"http://www.chuangjietech.com/\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创杰科技"), "html", null, true);
                echo "</a>";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
