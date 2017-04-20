<?php

/* ClassroomBundle:ClassroomAdmin:classroomadd.html.twig */
class __TwigTemplate_ee17fca843a922f6c848d2b120eede926b5c722fa5332bb11c391fa5d3f0f3f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:classroomadd.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/create";
        // line 6
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom-admin/classroom-create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"row\">
  <div class=\"col-md-offset-2 col-md-8\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</h2></div>

        <form id=\"classroom-create-form\" class=\"form-horizontal\" method=\"post\">

          ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label for=\"classroom_title\" class=\"required\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%名称", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</label>
            </div>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" id=\"classroom_title\" name=\"title\" required=\"required\" class=\"form-control\" data-widget-cid=\"widget-1\" data-explain=\"\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>

          ";
        // line 29
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomAdmin:classroomadd.html.twig", 29)->display(array_merge($context, array("lablecolmd" => 3)));
        // line 30
        echo "
          <div class=\"form-group\">
            <div class=\"col-md-3 control-label\">
              <label >";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%展示", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</label>
            </div>
            <div id=\"create-classroom\"  class=\"col-md-8 controls radios\">
              <label>
              <input id=\"showable-open\" type=\"radio\" name=\"showable\" value=\"1\" checked=\"checked\" > ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
        echo "
              </label>
              <label>
                <input id=\"showable-close\" type=\"radio\" name=\"showable\" value=\"0\"> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "
              </label>
              <div class=\"help-block\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后，%name%将彻底隐藏，无法在前台查看到。", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</div>
            </div>

          </div>
          <div class=\"form-group\">
            <div id='buyable'>
              <div class=\"col-md-3 control-label\">
                <label >";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%name%购买", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</label>
              </div>
              <div class=\"col-md-8 controls radios\">
                <label>
                  <input id=\"buyable-open\" type=\"radio\" name=\"buyable\" value=\"1\" checked=\"checked\" > ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("开启"), "html", null, true);
        echo "
                </label>
                <label>
                  <input id=\"buyable-close\" type=\"radio\" name=\"buyable\" value=\"0\"> ";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭"), "html", null, true);
        echo "
                </label>
                <div class=\"help-block\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("关闭后%name%将无法在线购买加入。", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</div>
              </div>
            </div>

          </div>

          <div class=\"form-group\">
            <div class=\"col-md-offset-3 col-md-8 controls\">
              <input id=\"classroom-create-btn\" data-submiting-text=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("正在创建"), "html", null, true);
        echo "\" class=\"btn btn-fat btn-primary\" type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建"), "html", null, true);
        echo "\">
            </div>
          </div>

          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

        </form>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:classroomadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 70,  139 => 66,  128 => 58,  123 => 56,  117 => 53,  110 => 49,  100 => 42,  95 => 40,  89 => 37,  82 => 33,  77 => 30,  75 => 29,  64 => 21,  57 => 17,  50 => 13,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
