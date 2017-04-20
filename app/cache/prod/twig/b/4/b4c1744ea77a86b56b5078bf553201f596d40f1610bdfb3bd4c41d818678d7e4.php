<?php

/* TopxiaWebBundle:MyTeaching:open-course.html.twig */
class __TwigTemplate_b4c1744ea77a86b56b5078bf553201f596d40f1610bdfb3bd4c41d818678d7e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:open-course.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-teaching-courses";
        // line 7
        $context["type"] = "question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    <span class=\"pull-right\">
      <a id=\"create-course\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        echo "</a>
    </span>
    ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
    ";
        // line 20
        $this->loadTemplate("TopxiaWebBundle:MyTeaching:course-tab.html.twig", "TopxiaWebBundle:MyTeaching:open-course.html.twig", 20)->display($context);
        // line 21
        echo "
    <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
      <thead>
      <tr>
        <th width=\"50%\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
        <th>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("浏览数"), "html", null, true);
        echo "</th>
        <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
        // line 32
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 33
            echo "       \t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 34
                echo "       \t <tr>
            <td>
              <a class=\"pull-left mrm\" href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
                <img class=\"course-picture\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\" width=\"100\">
              </a>

              <div class=\"mlm\">
                <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
                ";
                // line 42
                if (($this->getAttribute($context["course"], "type", array()) == "liveOpen")) {
                    // line 43
                    echo "                  <span class=\"label label-success live-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                    echo "</span>
                ";
                }
                // line 45
                echo "              </div>
            </td>
            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "hitNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 48
                echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute($context["course"], "status", array()));
                echo "</td>
            <td>
              <div class=\"btn-group\">
                ";
                // line 51
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                    // line 52
                    echo "                  <a class=\"btn btn-default btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
                    echo "</a>
                ";
                } elseif (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(                // line 53
(isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                    // line 54
                    echo "                  <a class=\"btn btn-default btn-sm\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 56
                echo "
                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  ";
                // line 61
                if (($this->getAttribute($context["course"], "type", array()) != "liveOpen")) {
                    // line 62
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_lesson", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
                    echo "</a></li>
                    <li><a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_files", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件管理"), "html", null, true);
                    echo "</a></li>
                  ";
                }
                // line 65
                echo "                  <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage_students", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
                echo "</a></li>
                </ul>
              </div>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        ";
        } else {
            // line 72
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无在教的公开课"), "html", null, true);
            echo "</div></td></tr>
       ";
        }
        // line 74
        echo "        
      </tbody>
    </table>
    <nav class=\"text-center\">
      ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:open-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 78,  219 => 74,  213 => 72,  210 => 71,  190 => 65,  183 => 63,  176 => 62,  174 => 61,  167 => 56,  159 => 54,  157 => 53,  150 => 52,  148 => 51,  142 => 48,  138 => 47,  134 => 45,  128 => 43,  126 => 42,  118 => 41,  109 => 37,  103 => 36,  99 => 34,  94 => 33,  92 => 32,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 21,  65 => 20,  58 => 16,  51 => 14,  45 => 10,  42 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
