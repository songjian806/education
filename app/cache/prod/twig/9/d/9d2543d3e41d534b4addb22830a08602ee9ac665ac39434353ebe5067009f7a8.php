<?php

/* ClassroomBundle:ClassroomManage:set-info.html.twig */
class __TwigTemplate_9d2543d3e41d534b4addb22830a08602ee9ac665ac39434353ebe5067009f7a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 1);
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
        // line 3
        $context["side_nav"] = "base";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-info";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom-admin/classroom-create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("基本信息"), "html", null, true);
        echo "</div>
  <div class=\"panel-body\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"title\" type=\"text\"  id=\"title\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\"/>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("简介"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"controls col-md-8\">
          <textarea name=\"about\" class=\"form-control\" rows=\"6\" 
          data-image-upload-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"
          data-flash-upload-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default", "flash"))), "html", null, true);
        echo "\" id=\"about\">";
        echo $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array());
        echo "</textarea>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%展示", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" data-showable=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array()), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
        echo "
          </label>
          <label>
            <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "
          </label>
          <div class=\"help-block\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后，%name%将彻底隐藏，无法在前台查看到。", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</div>
        </div>

      </div>
      <div class=\"row form-group\">
      <div id='buyable'>
        <div class=\"col-md-2 control-label\">
          <label >";
        // line 54
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("购买"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          <label>
          <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" data-buyable=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
        echo "
          </label>
          <label>
            <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "
          </label>
          <div class=\"help-block\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后%name%将无法在线购买加入。", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</div>
        </div>
        </div>
      </div>
      
      <div class=\"form-group\">
        <label class=\"col-md-2 control-label\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类"), "html", null, true);
        echo "</label>
        <div class=\"col-md-8 controls\">
          <select id=\"course_categoryId\" name=\"categoryId\" required=\"required\" class=\"form-control width-input width-input-large\">
            ";
        // line 72
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "categoryId", array()), array("0" => $this->env->getExtension('translator')->trans("分类")));
        echo "
          </select>
          <div class=\"help-block\" style=\"display:none;\"></div>
        </div>
      </div>

     ";
        // line 78
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomManage:set-info.html.twig", 78)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "orgCode", array()), "inputClass" => "width-input width-input-large")));
        // line 79
        echo "    
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提交"), "html", null, true);
        echo "</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 87,  183 => 83,  177 => 79,  175 => 78,  166 => 72,  160 => 69,  151 => 63,  146 => 61,  138 => 58,  130 => 54,  120 => 47,  115 => 45,  107 => 42,  100 => 38,  89 => 32,  85 => 31,  78 => 27,  69 => 21,  63 => 18,  55 => 13,  50 => 11,  47 => 10,  44 => 9,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
