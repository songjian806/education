<?php

/* TopxiaAdminBundle:OpenCourse:course-search-form.html.twig */
class __TwigTemplate_cfb24a7fb139c746c2d877bd61aee358525fc2813d97b7213c9ed5be6ec6745c extends Twig_Template
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
        echo "<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter((isset($context["actionUrl"]) ? $context["actionUrl"] : null), "")) : ("")), "html", null, true);
        echo "\" method=\"get\" novalidate>
  <div class=\"form-group\">
    <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
      ";
        // line 4
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
    </select>
  </div>
  ";
        // line 7
        if (((array_key_exists("showStatusSelect", $context)) ? (_twig_default_filter((isset($context["showStatusSelect"]) ? $context["showStatusSelect"] : null), null)) : (null))) {
            // line 8
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
            // line 10
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "课程状态");
            echo "
      </select>
    </div>
  ";
        }
        // line 14
        echo "  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
  </div>
  <button class=\"btn btn-primary\">搜索</button>

  <button class=\"btn btn-primary\">搜索</button>
  ";
        // line 23
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "TopxiaAdminBundle:OpenCourse:course-search-form.html.twig", 23)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('translator')->trans("公开课说明Tooltip"), "placement" => "left")));
        // line 24
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourse:course-search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 24,  62 => 23,  54 => 18,  48 => 15,  45 => 14,  38 => 10,  34 => 8,  32 => 7,  26 => 4,  19 => 1,);
    }
}
