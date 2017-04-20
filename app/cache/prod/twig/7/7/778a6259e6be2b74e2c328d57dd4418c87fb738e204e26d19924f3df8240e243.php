<?php

/* TopxiaAdminBundle:OpenCourse:tr.html.twig */
class __TwigTemplate_778a6259e6be2b74e2c328d57dd4418c87fb738e204e26d19924f3df8240e243 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:OpenCourse:tr.html.twig", 1);
        // line 2
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:OpenCourse:tr.html.twig", 2);
        // line 3
        $context["target"] = (("" . (isset($context["filter"]) ? $context["filter"] : null)) . "_index");
        // line 4
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</strong></a>
    
    ";
        // line 9
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen")) {
            // line 10
            echo "      <span class=\"label label-success live-label mls\">直播</span>
    ";
        }
        // line 12
        echo "
    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span> 
    ";
        // line 15
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())) {
            // line 16
            echo "      <span class=\"label label-default\">荐:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 18
        echo "  </td>
    
  <td>";
        // line 20
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
        echo "</td>
  <td>
    ";
        // line 22
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("open_course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
        echo "\" target=\"_blank\">管理</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
    
        ";
        // line 35
        if ( !$this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())) {
            // line 36
            echo "          <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_open_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "ref" => "courseList", "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐课程</a></li>
        ";
        }
        // line 38
        echo "
        ";
        // line 39
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())) {
            // line 40
            echo "          <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_open_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null), "target" => (isset($context["target"]) ? $context["target"] : null))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
        ";
        }
        // line 42
        echo "
        ";
        // line 43
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 44
            echo "          <li class=\"divider\"></li>
          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_open_course_close", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 关闭课程</a></li>
        ";
        }
        // line 47
        echo "
        ";
        // line 48
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
            // line 49
            echo "          <li class=\"divider\"></li>
          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_open_course_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 发布课程</a></li>
        ";
        }
        // line 52
        echo "
        ";
        // line 53
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 54
            echo "          <li class=\"divider\"></li>
          <li><a class=\"delete-course\" href=\"javascript:;\" data-url=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_open_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "", "filter" => (isset($context["filter"]) ? $context["filter"] : null))), "html", null, true);
            echo "\"  data-chapter=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), "章")) : ("章")), "html", null, true);
            echo "\" data-part=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), "节")) : ("节")), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除课程</a></li>
        ";
        }
        // line 57
        echo "      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourse:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 57,  152 => 55,  149 => 54,  147 => 53,  144 => 52,  139 => 50,  136 => 49,  134 => 48,  131 => 47,  124 => 45,  121 => 44,  119 => 43,  116 => 42,  110 => 40,  108 => 39,  105 => 38,  99 => 36,  97 => 35,  87 => 28,  80 => 24,  75 => 22,  70 => 20,  66 => 18,  58 => 16,  56 => 15,  52 => 14,  48 => 12,  44 => 10,  42 => 9,  35 => 7,  30 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
