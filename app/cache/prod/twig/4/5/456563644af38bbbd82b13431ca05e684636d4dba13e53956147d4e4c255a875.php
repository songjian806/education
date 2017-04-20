<?php

/* ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig */
class __TwigTemplate_456563644af38bbbd82b13431ca05e684636d4dba13e53956147d4e4c255a875 extends Twig_Template
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
        echo "<div class=\"modal access-intercept-modal\" style=\"display: none;\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("提示"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <h4>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("您尚未成为%classroom%成员，请先成为%classroom.name%成员。", array("%classroom%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")), "%classroom.name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-footer\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("加入旁听生"), "html", null, true);
        echo "</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  31 => 8,  25 => 5,  19 => 1,);
    }
}
