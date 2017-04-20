<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_383804e2be2f5700d7534a6c6c96888a9967687f5e3c5641006662680203cf68 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 1);
        // line 2
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 2);
        // line 3
        $context["target"] = (("" . (isset($context["filter"]) ? $context["filter"] : null)) . "_index");
        // line 4
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 5
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 5)->display($context);
        // line 6
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</strong></a>
    
    ";
        // line 10
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen"))) {
            // line 11
            echo "      <span class=\"label label-success live-label mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("直播"), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 15
            echo "      ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), array(), "array"), null)) : (null));
            // line 16
            echo "      ";
            if ( !(isset($context["classroom"]) ? $context["classroom"] : null)) {
                // line 17
                echo "        <span class=\"label label-danger live-label mls\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已移除"), "html", null, true);
                echo "</span>
      ";
            }
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类："), "html", null, true);
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 22
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommended", array())) {
            // line 23
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("荐:"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("序号:"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "
  </td>
  <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
        echo "</td>
  ";
        // line 28
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 28)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "orgCode", array()))));
        // line 29
        echo "  ";
        if ((((isset($context["filter"]) ? $context["filter"] : null) != "open") && ((isset($context["filter"]) ? $context["filter"] : null) != "liveOpen"))) {
            // line 30
            echo "    <td>
      ";
            // line 31
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "none")) {
                // line 32
                echo "      <span class=\"text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("非连载课程"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 33
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 34
                echo "      <span class=\"text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("连载中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 35
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 36
                echo "      <span class=\"text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 38
            echo "    </td>
    ";
            // line 39
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                // line 40
                echo "    <td>
      ";
                // line 41
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), array(), "array"), null)) : (null));
                // line 42
                echo "      ";
                if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                    // line 43
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
      ";
                }
                // line 45
                echo "    </td>
    ";
            } else {
                // line 47
                echo "      <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 49
            echo "    ";
            if (((isset($context["filter"]) ? $context["filter"] : null) == "vip")) {
                // line 50
                echo "        ";
                $context["vip"] = (($this->getAttribute((isset($context["vips"]) ? $context["vips"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "vipLevelId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["vips"]) ? $context["vips"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "vipLevelId", array()), array(), "array"), null)) : (null));
                // line 51
                echo "        <td>";
                if ((isset($context["vip"]) ? $context["vip"] : null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : null), "name", array()), "html", null, true);
                } else {
                    echo "该会员等级已删除";
                }
                echo "</td>
   
    ";
            }
            // line 54
            echo "  ";
        }
        // line 55
        echo "
  <td> ";
        // line 56
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()));
        echo "</td>
  <td>
    ";
        // line 58
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      ";
        // line 64
        if ($this->env->getExtension('permission.permission_extension')->hasPermission("admin_course_content_manage")) {
            // line 65
            echo "        <a class=\"btn btn-default btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
            echo "</a>
      ";
        }
        // line 67
        echo "
      ";
        // line 68
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 68)->display(array_merge($context, array("parentCode" => "admin_course_manage", "group" => "groupButton", "course" => (isset($context["course"]) ? $context["course"] : null))));
        // line 69
        echo "    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 69,  215 => 68,  212 => 67,  204 => 65,  202 => 64,  195 => 60,  190 => 58,  185 => 56,  182 => 55,  179 => 54,  168 => 51,  165 => 50,  162 => 49,  156 => 47,  152 => 45,  144 => 43,  141 => 42,  139 => 41,  136 => 40,  134 => 39,  131 => 38,  125 => 36,  123 => 35,  118 => 34,  116 => 33,  111 => 32,  109 => 31,  106 => 30,  103 => 29,  101 => 28,  97 => 27,  93 => 25,  83 => 23,  81 => 22,  76 => 21,  73 => 20,  70 => 19,  64 => 17,  61 => 16,  58 => 15,  56 => 14,  53 => 13,  47 => 11,  45 => 10,  38 => 8,  32 => 6,  30 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
