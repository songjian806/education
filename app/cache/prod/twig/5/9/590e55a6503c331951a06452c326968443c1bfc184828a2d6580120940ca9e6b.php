<?php

/* TopxiaWebBundle:Thread:show.html.twig */
class __TwigTemplate_590e55a6503c331951a06452c326968443c1bfc184828a2d6580120940ca9e6b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 1);
        // line 2
        echo "
<div class=\"topic-detail\">
  
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 5)->display(array_merge($context, array("target" => (isset($context["target"]) ? $context["target"] : null), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "type" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()), "isUpdate" => false)));
        // line 6
        echo "
  ";
        // line 7
        $this->loadTemplate((("TopxiaWebBundle:Thread/Part:" . $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array())) . "-header.html.twig"), "TopxiaWebBundle:Thread:show.html.twig", 7)->display($context);
        // line 8
        echo "  
  ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Attachment/Widget:list.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 9)->display(array_merge($context, array("targetType" => "classroom.thread", "targetId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))));
        // line 10
        echo "  
  ";
        // line 11
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:thread-action.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 11)->display($context);
        // line 12
        echo "
  ";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:good-post.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 13)->display(array_merge($context, array("posts" => (isset($context["goodPosts"]) ? $context["goodPosts"] : null))));
        // line 14
        echo "  
  ";
        // line 15
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:all-post.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 15)->display($context);
        // line 16
        echo "  
  ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:post-form.html.twig", "TopxiaWebBundle:Thread:show.html.twig", 17)->display($context);
        // line 18
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  56 => 17,  53 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  41 => 11,  38 => 10,  36 => 9,  33 => 8,  31 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
