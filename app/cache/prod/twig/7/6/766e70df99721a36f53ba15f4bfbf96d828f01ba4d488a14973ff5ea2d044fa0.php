<?php

/* TopxiaAdminBundle:Course:course-recommend-tr.html.twig */
class __TwigTemplate_766e70df99721a36f53ba15f4bfbf96d828f01ba4d488a14973ff5ea2d044fa0 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:course-recommend-tr.html.twig", 1);
        // line 2
        $context["target"] = "recommend_list";
        // line 3
        echo "
";
        // line 4
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "open") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "liveOpen"))) {
            // line 5
            echo "  ";
            $context["showUrl"] = $this->env->getExtension('routing')->getPath("open_course_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
            // line 6
            echo "  ";
            $context["cancelUrl"] = $this->env->getExtension('routing')->getPath("admin_open_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "target" => (isset($context["target"]) ? $context["target"] : null)));
            // line 7
            echo "  ";
            $context["recommendUrl"] = $this->env->getExtension('routing')->getPath("admin_open_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "ref" => "recommendList"));
        } else {
            // line 9
            echo "  ";
            $context["showUrl"] = $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())));
            // line 10
            echo "  ";
            $context["cancelUrl"] = $this->env->getExtension('routing')->getPath("admin_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "target" => (isset($context["target"]) ? $context["target"] : null)));
            // line 11
            echo "  ";
            $context["recommendUrl"] = $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "ref" => "recommendList"));
        }
        // line 13
        echo "
<tr id=\"course-tr-";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" data-sort=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedSeq", array()), "html", null, true);
        echo "\">
  <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedSeq", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["showUrl"]) ? $context["showUrl"] : null), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</strong></a>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类："), "html", null, true);
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
  </td>
  ";
        // line 21
        if (!twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()), array(0 => "open", 1 => "liveOpen"))) {
            // line 22
            echo "    ";
            $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Course:course-recommend-tr.html.twig", 22)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "orgCode", array()))));
            // line 23
            echo "  ";
        }
        // line 24
        echo "  <td>
    ";
        // line 25
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
        echo "
  </td>
  <td>

    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["recommendUrl"]) ? $context["recommendUrl"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置序号"), "html", null, true);
        echo "</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">

        <li>
          <a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["cancelUrl"]) ? $context["cancelUrl"] : null), "html", null, true);
        echo "\">
          <span class=\"glyphicon glyphicon-hand-right\"></span> ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消推荐"), "html", null, true);
        echo "</a>
        </li>
    
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-recommend-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 44,  118 => 43,  105 => 35,  97 => 30,  91 => 27,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  75 => 21,  69 => 19,  62 => 17,  57 => 15,  51 => 14,  48 => 13,  44 => 11,  41 => 10,  38 => 9,  34 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
