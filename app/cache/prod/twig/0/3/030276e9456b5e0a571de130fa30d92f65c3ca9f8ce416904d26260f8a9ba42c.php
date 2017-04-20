<?php

/* ClassroomBundle:ClassroomAdmin:table-tr.html.twig */
class __TwigTemplate_030276e9456b5e0a571de130fa30d92f65c3ca9f8ce416904d26260f8a9ba42c extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 3)->display($context);
        // line 4
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 12
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommended", array())) {
            // line 13
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("荐"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("序号"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 15
        echo "    </td>
    ";
        // line 16
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 16)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "orgCode", array()))));
        // line 17
        echo "    <td>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 20
        if (($this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : null), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), array(), "array") > 0)) {
            // line 21
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("详情"), "html", null, true);
            echo "</a>
    </strong>
    ";
        }
        // line 25
        echo "    </td>

    <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    <span style=\"color: #F40; \">
            ";
        // line 33
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 34
            echo "               ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "
            ";
        } else {
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("元"), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      ";
        // line 43
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 44
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原价 %coinPriceAll% %coinname%", array("%coinPriceAll%" => $this->getAttribute((isset($context["coinPriceAll"]) ? $context["coinPriceAll"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "%coinname%" => $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"))), "html", null, true);
            echo "
      ";
        } else {
            // line 46
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("原价 %priceAll%元", array("%priceAll%" => $this->getAttribute((isset($context["priceAll"]) ? $context["priceAll"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"))), "html", null, true);
            echo "
      ";
        }
        // line 48
        echo "    </span>


    </td>

    <td>
    ";
        // line 54
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 55
            echo "    <span style=\"color: #090;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 56
(isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "closed")) {
            // line 57
            echo "    
    <span style=\"color: #900;\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 60
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未发布"), "html", null, true);
            echo "
    ";
        }
        // line 62
        echo "    </td>

    <td>

  <div class=\"btn-group\">
      ";
        // line 67
        if ($this->env->getExtension('permission.permission_extension')->hasPermission("admin_classroom_content_manage")) {
            // line 68
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-default btn-sm\">管理</a>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 71)->display(array_merge($context, array("parentCode" => "admin_classroom_manage", "group" => "groupButton", "classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        // line 72
        echo "  </div>
 </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 72,  190 => 71,  187 => 70,  181 => 68,  179 => 67,  172 => 62,  166 => 60,  161 => 58,  158 => 57,  156 => 56,  151 => 55,  149 => 54,  141 => 48,  135 => 46,  129 => 44,  127 => 43,  120 => 38,  113 => 36,  105 => 34,  103 => 33,  95 => 28,  90 => 25,  82 => 22,  79 => 21,  77 => 20,  72 => 18,  69 => 17,  67 => 16,  64 => 15,  52 => 13,  50 => 12,  44 => 11,  36 => 8,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
