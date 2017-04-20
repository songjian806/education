<?php

/* ClassroomBundle:ClassroomManage:picture-crop.html.twig */
class __TwigTemplate_cece1dd47e741eef5af4937b1d5f957eff9c244e720d836138574f71d05da7de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:picture-crop.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "picture";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/picture-crop";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("封面图片"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("封面图片"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">

  <form id=\"classroom-picture-crop-form\" method=\"post\" enctype=\"multipart/form-data\">

    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">
        <img class=\"img-responsive\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath((isset($context["pictureUrl"]) ? $context["pictureUrl"] : null)), "html", null, true);
        echo "\" id=\"classroom-picture-crop\" width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["scaledSize"]) ? $context["scaledSize"] : null), "height", array()), "html", null, true);
        echo "\" data-natural-width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "width", array()), "html", null, true);
        echo "\" data-natural-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["naturalSize"]) ? $context["naturalSize"] : null), "height", array()), "html", null, true);
        echo "\" />
        <div class=\"help-block\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示：请选择图片裁剪区域。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group clearfix\">
      <div class=\"col-md-offset-2 col-md-8 controls\">

        <a class=\"btn btn-fat btn-primary\" id=\"upload-picture-btn\" 
        data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_picture_crop", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\"
        >";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</a>
        <a href=\"javascript:;\" class=\"go-back btn btn-link\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重新选择图片"), "html", null, true);
        echo "</a>
      </div>
    </div>

  </form>

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:picture-crop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 28,  85 => 27,  81 => 26,  70 => 18,  58 => 17,  48 => 10,  45 => 9,  42 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
