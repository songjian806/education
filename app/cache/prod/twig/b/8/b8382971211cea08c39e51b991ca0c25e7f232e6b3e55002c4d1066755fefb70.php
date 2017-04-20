<?php

/* TopxiaWebBundle:MyTeaching:teaching.html.twig */
class __TwigTemplate_b8382971211cea08c39e51b991ca0c25e7f232e6b3e55002c4d1066755fefb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 2);
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
        // line 1
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 1);
        // line 6
        $context["side_nav"] = "my-teaching-courses";
        // line 8
        $context["type"] = "question";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    <span class=\"pull-right\">
      <a id=\"create-course\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("创建课程"), "html", null, true);
        echo "</a>
    </span>
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在教课程"), "html", null, true);
        echo "
  </div>

  <div class=\"panel-body\">
    ";
        // line 21
        $this->loadTemplate("TopxiaWebBundle:MyTeaching:course-tab.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 21)->display($context);
        // line 22
        echo "
    <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
      <thead>
      <tr>
        <th width=\"50%\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
        ";
        // line 27
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 28
            echo "        <th >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("所属%name%", array("%name%" => _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), $this->env->getExtension('translator')->trans("班级")))), "html", null, true);
            echo "</th>
        ";
        } else {
            // line 30
            echo "        <th>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), $this->env->getExtension('translator')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("数"), "html", null, true);
            echo "</th>
        <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("价格(元)"), "html", null, true);
            echo "</th>
        ";
        }
        // line 33
        echo "        <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("状态"), "html", null, true);
        echo "</th>
        <th width=\"20%\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 39
            echo "          <tr>
            <td>

              <a class=\"pull-left mrm\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
                <img class=\"course-picture\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\" width=\"100\">
              </a>

              <div class=\"mlm\">
                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a>

                ";
            // line 49
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 50
                echo "                  <span class=\"label label-success live-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
                echo "</span>
                ";
            }
            // line 52
            echo "
                ";
            // line 53
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                // line 54
                echo "                  ";
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), null)) : (null));
                // line 55
                echo "                  ";
                if ( !(isset($context["classroom"]) ? $context["classroom"] : null)) {
                    // line 56
                    echo "                    <span class=\"label label-danger live-label mls\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已移除"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 58
                echo "                ";
            }
            // line 59
            echo "              </div>

            </td>
            ";
            // line 62
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                // line 63
                echo "            <td>
              ";
                // line 64
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), null)) : (null));
                // line 65
                echo "              ";
                if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                    // line 66
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 68
                echo "            </td>
            ";
            } else {
                // line 70
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                echo "</td>
            ";
            }
            // line 73
            echo "
            <td> ";
            // line 74
            echo $context["dict_macro"]->getcourseStatus($this->getAttribute($context["course"], "status", array()));
            echo "</td>
            <td>
              <div class=\"btn-group\">
                <a class=\"btn btn-default btn-sm\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
            echo "</a>

                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("课时管理"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("文件管理"), "html", null, true);
            echo "</a></li>
                  <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
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
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "          <tr><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无在教的课程"), "html", null, true);
            echo "</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "      </tbody>
    </table>
    <nav class=\"text-center\">
      ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:teaching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 97,  268 => 94,  259 => 92,  240 => 85,  234 => 84,  228 => 83,  217 => 77,  211 => 74,  208 => 73,  203 => 71,  198 => 70,  194 => 68,  186 => 66,  183 => 65,  181 => 64,  178 => 63,  176 => 62,  171 => 59,  168 => 58,  162 => 56,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  145 => 50,  143 => 49,  136 => 47,  127 => 43,  123 => 42,  118 => 39,  113 => 38,  106 => 34,  101 => 33,  96 => 31,  86 => 30,  80 => 28,  78 => 27,  74 => 26,  68 => 22,  66 => 21,  59 => 17,  52 => 15,  47 => 12,  44 => 10,  36 => 4,  32 => 2,  30 => 8,  28 => 6,  26 => 1,  11 => 2,);
    }
}
