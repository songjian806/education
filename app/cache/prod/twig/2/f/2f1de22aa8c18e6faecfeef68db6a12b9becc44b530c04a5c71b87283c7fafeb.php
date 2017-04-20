<?php

/* TopxiaWebBundle:OpenCourse:open-course-header.html.twig */
class __TwigTemplate_2f1de22aa8c18e6faecfeef68db6a12b9becc44b530c04a5c71b87283c7fafeb extends Twig_Template
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
        echo "
";
        // line 2
        $this->env->getExtension('topxia_web_twig')->loadScript("open-course/open-course-header");
        // line 3
        echo "
<div class=\"col-md-9 open-course-views\" data-get-recommend-course-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_ad_modal_recommend_course", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "num" => 3)), "html", null, true);
        echo "\">
  ";
        // line 5
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen")) {
            // line 6
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:OpenCourse:live-open-course-header.html.twig", "TopxiaWebBundle:OpenCourse:open-course-header.html.twig", 6)->display($context);
            // line 7
            echo "  ";
        } else {
            // line 8
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:OpenCourse:lesson-play.html.twig", "TopxiaWebBundle:OpenCourse:open-course-header.html.twig", 8)->display($context);
            // line 9
            echo "  ";
        }
        // line 10
        echo "  
  <div class=\"mask modal fade\" id=\"open-course-ad-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"openCourseADModal\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
          <h4 class=\"modal-title\" id=\"open-course-ad-modal-title\">课时学习完成</h4>
        </div>
        <div class=\"modal-body\">
          <div class='empty'>如果喜欢课程内容，赶紧分享给好友吧</div>
        </div>
        <div class=\"modal-footer\">
          <div class=\"es-share top\">
            <a href=\"javascript:;\" class=\"btn-link color-gray prl js-player-replay\"><i class=\"es-icon es-icon-refresh prs\"></i>重播</a>
            <a href=\"\" class=\"btn btn-lg share-btn dropdown-toggle mrm\" data-toggle=\"dropdown\">
              <i class=\"es-icon es-icon-share prs\"></i>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分享"), "html", null, true);
        echo "</a>
            ";
        // line 26
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "TopxiaWebBundle:OpenCourse:open-course-header.html.twig", 26)->display(array_merge($context, array("type" => "course")));
        // line 27
        echo "            ";
        // line 32
        echo "          </div>
        </div>
      </div>

    </div>
  </div>
  <div class=\"black-mask\"></div>
</div>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OpenCourse:open-course-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 32,  68 => 27,  66 => 26,  62 => 25,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
