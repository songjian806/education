<?php

/* TopxiaWebBundle:Article/Part:detail-copyright.html.twig */
class __TwigTemplate_877c08a1f1328ab12e572e0751ae764a554589d420d8112787fe52438e6590e5 extends Twig_Template
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
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array()) || $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array()))) {
            // line 2
            echo "<div class=\"well\">
  ";
            // line 3
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array())) {
                // line 4
                echo "    <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文章来源"), "html", null, true);
                echo ": <strong class=\"mll\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "source", array()), "html", null, true);
                echo "</strong></p>
  ";
            }
            // line 6
            echo "
  ";
            // line 7
            if ($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array())) {
                // line 8
                echo "    <p>
      ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原文链接"), "html", null, true);
                echo ":
      <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array()), "html", null, true);
                echo "\" class=\"mll transition\" target=\"_blank\">
        ";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sourceUrl", array()), "html", null, true);
                echo "
      </a>
    </p>
  ";
            }
            // line 15
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-copyright.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  50 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  34 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
