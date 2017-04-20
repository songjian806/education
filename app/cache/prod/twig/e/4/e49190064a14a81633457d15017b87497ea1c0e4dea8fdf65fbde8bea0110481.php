<?php

/* TopxiaAdminBundle:Category:modal.html.twig */
class __TwigTemplate_e49190064a14a81633457d15017b87497ea1c0e4dea8fdf65fbde8bea0110481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Category:modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑分类"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("添加分类"), "html", null, true);
        }
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"category-creater-widget\">

\t<form id=\"category-form\" class=\"form-horizontal\" action=\"";
        // line 8
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
        } else {
            echo $this->env->getExtension('routing')->getPath("admin_category_create");
        }
        echo "\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-name-field\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-name-field\" type=\"text\" name=\"name\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "\" tabindex=\"1\">
\t\t\t</div>
\t\t</div>

\t\t";
        // line 23
        echo "
\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编码"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<input class=\"form-control\" id=\"category-code-field\" type=\"text\" name=\"code\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_checkcode", array("exclude" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
        echo "\" tabindex=\"3\">
\t\t\t\t<div class=\"help-block\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("必填，建议使用分类名称的英文单词或缩写作为编码。"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-description-field\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类描述"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<textarea class=\"form-control\" id=\"category-description-field\" style=\"height:100px;\" name=\"description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t<div class=\"help-block\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("非必填"), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\" style=\"display:none;\">
\t\t\t<label class=\"col-md-2 control-label\" for=\"category-code-field\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("图标"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"col-md-8 controls\">
\t\t\t\t<div id=\"category-icon-field\">
\t\t\t\t\t";
        // line 44
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array())) {
            // line 45
            echo "\t\t\t\t\t\t<img class=\"mbm\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array()), "html", null, true);
            echo "\">
\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t</div>
\t\t\t\t<input type=\"hidden\" name=\"icon\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array()), "html", null, true);
        echo "\">
\t\t\t\t<button id=\"category-icon-uploader\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\" data-target=\"#category-icon-field\"><i class=\"glyphicon glyphicon-picture\"></i></button>
\t\t\t\t<button ";
        // line 50
        if ( !$this->getAttribute((isset($context["category"]) ? $context["category"] : null), "icon", array())) {
            echo "style=\"display:none;\"";
        }
        echo " id=\"category-icon-delete\" class=\"btn btn-sm btn-default webuploader-container\" type=\"button\"><i class=\"glyphicon glyphicon-trash\"></i></button>
\t\t\t\t<div class=\"help-block\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("允许上传的图标文件格式为"), "html", null, true);
        echo "'pg, jpeg, gif, png</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" name=\"groupId\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "groupId", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "parentId", array()), "html", null, true);
        echo "\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>
</div>
<script type=\"text/javascript\"> app.load('category/save-modal') </script>
";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "\t";
        if ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array())) {
            // line 65
            echo "\t\t<button type=\"button\" class=\"btn btn-default pull-left delete-category\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))), "html", null, true);
            echo "\" tabindex=\"5\"><i class=\"glyphicon glyphicon-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("删除"), "html", null, true);
            echo "</button>
\t";
        } else {
            // line 67
            echo "
\t";
        }
        // line 69
        echo "  \t<button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\" tabindex=\"6\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
        echo "</button>
\t<button id=\"category-create-btn\" data-submiting-text=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在提交"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#category-form\" tabindex=\"4\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("保存"), "html", null, true);
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 70,  178 => 69,  174 => 67,  166 => 65,  163 => 64,  160 => 63,  151 => 57,  147 => 56,  143 => 55,  136 => 51,  130 => 50,  125 => 48,  122 => 47,  116 => 45,  114 => 44,  108 => 41,  100 => 36,  96 => 35,  91 => 33,  83 => 28,  77 => 27,  72 => 25,  68 => 23,  61 => 12,  56 => 10,  47 => 8,  43 => 6,  40 => 5,  30 => 3,  11 => 1,);
    }
}
