<?php

/* TopxiaWebBundle:Thread:post-interaction.html.twig */
class __TwigTemplate_385a49989f50503be81925bf1dcf15efb5e764add586a8b7deed8658c4ae74ec extends Twig_Template
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
        echo "<div class=\"thread-post-interaction\">
  <a href=\"javascript:;\" class=\"js-post-up interaction text-muted\"
    data-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post_up", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "\">
    <span class=\"glyphicon glyphicon-thumbs-up\"></span> (<span class=\"post-up-num\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ups", array()), "html", null, true);
        echo "</span>)
  </a>
  <a href=\"javascript:;\" class=\"js-reply interaction text-muted\"><span class=\"glyphicon glyphicon-comment hide\"></span>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("回复"), "html", null, true);
        echo "
    ";
        // line 8
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "parentId", array())) {
            // line 9
            echo "      <span class=\"subposts-num-wrap ";
            if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
                echo "hide";
            }
            echo "\">(<span class=\"subposts-num\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()), "html", null, true);
            echo "</span>)</span>
    ";
        }
        // line 11
        echo "  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post-interaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  39 => 9,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
