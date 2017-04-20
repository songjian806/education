<?php

/* ClassroomBundle:ClassroomManage:header.html.twig */
class __TwigTemplate_955936e4c5386b1532c01768503ec19f04dc2f8b4c41d4ce7b5dbe995b0cc65a extends Twig_Template
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
        $context["unsetted"] = "";
        // line 2
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "about", array())) {
            // line 3
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",简介"));
        }
        // line 5
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array())) {
            // line 6
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",图片"));
        }
        // line 8
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) == 0)) {
            // line 9
            echo "  ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",价格"));
        }
        // line 11
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "courseNum", array()) == 0)) {
            // line 12
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : null) . $this->env->getExtension('translator')->trans(",课程"));
        }
        // line 14
        echo "

<div class=\"es-section course-manage-header clearfix\">
  <img class=\"picture\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "smallPicture", array()), "classroom.png"), "html", null, true);
        echo "\">
  <h1 class=\"title\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 19
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "draft")) {
            // line 20
            echo "    <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 22
            echo "    <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        }
        // line 24
        echo "    ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 25
            echo "    <span class=\"label label-success\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
            echo "</span>
    ";
        }
        // line 27
        echo "  </h1>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 30
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 31
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("返回%name%主页", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 35
        echo "    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("预览"), "html", null, true);
        echo " <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为未购买用户"), "html", null, true);
        echo "</a></li>
        ";
        // line 41
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array())) {
            // line 42
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "previewAs" => "auditor")), "html", null, true);
            echo "\" target=\"blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为旁听生"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 44
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作为正式学员"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>


    ";
        // line 49
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "published")) {
            // line 50
            echo "      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
            echo "
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
            // line 65
            if ((twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : null)) > 0)) {
                // line 66
                echo "                ";
                $context["unsetted"] = twig_split_filter($this->env, $this->env->getExtension('topxia_web_twig')->subStr((isset($context["unsetted"]) ? $context["unsetted"] : null), 1, (twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : null)) - 1)), ",");
                // line 67
                echo "                <span class=\"text-danger\">
                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("%unsetted%还未设置", array("%unsetted%" => twig_join_filter((isset($context["unsetted"]) ? $context["unsetted"] : null), "，"))), "html", null, true);
                echo "
                </span>
                ";
            }
            // line 71
            echo "                &nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定要发布吗？"), "html", null, true);
            echo "
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消"), "html", null, true);
            echo "</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_publish", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("确定"), "html", null, true);
            echo "</button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 82
        echo "
  </div>
</div>

";
        // line 86
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/manage/publish");
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 86,  198 => 82,  187 => 76,  183 => 75,  175 => 71,  169 => 68,  166 => 67,  163 => 66,  161 => 65,  154 => 61,  142 => 52,  138 => 50,  136 => 49,  125 => 44,  117 => 42,  115 => 41,  109 => 40,  103 => 37,  99 => 35,  91 => 32,  88 => 31,  86 => 30,  81 => 27,  75 => 25,  72 => 24,  66 => 22,  64 => 21,  59 => 20,  57 => 19,  51 => 18,  47 => 17,  42 => 14,  39 => 12,  37 => 11,  33 => 9,  31 => 8,  28 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
