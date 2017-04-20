<?php

/* TopxiaAdminBundle:Default:domain.html.twig */
class __TwigTemplate_2d7653340475bec3e5afa7d28abb3311cb41949f8399fe2e67910dd418c7e033 extends Twig_Template
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
        if ((isset($context["inspectList"]) ? $context["inspectList"] : null)) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inspectList"]) ? $context["inspectList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "      <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
      <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  33 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
