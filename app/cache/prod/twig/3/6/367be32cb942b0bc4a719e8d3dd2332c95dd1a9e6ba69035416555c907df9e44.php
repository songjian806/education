<?php

/* TopxiaWebBundle:Article/Part:paginator.html.twig */
class __TwigTemplate_367be32cb942b0bc4a719e8d3dd2332c95dd1a9e6ba69035416555c907df9e44 extends Twig_Template
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
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()) > 1)) {
            // line 2
            echo "  <nav>
    <ul class=\"pager\">
      <li class=\"previous ";
            // line 4
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "firstPage", array()))) {
                echo "disabled";
            }
            echo "\">
        <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "previousPage", array())), "method"), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-chevronleft\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("上一页"), "html", null, true);
            echo "</a>
      </li>
      <li class=\"next ";
            // line 7
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "lastPage", array()))) {
                echo "disabled";
            }
            echo "\">
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "nextPage", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("下一页"), "html", null, true);
            echo "<i class=\"es-icon es-icon-chevronright\"></i></a>
      </li>
    </ul>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  38 => 7,  31 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
