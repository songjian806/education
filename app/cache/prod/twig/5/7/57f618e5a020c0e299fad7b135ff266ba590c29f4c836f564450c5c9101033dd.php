<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_57f618e5a020c0e299fad7b135ff266ba590c29f4c836f564450c5c9101033dd extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 3)->display($context);
        // line 4
        echo "  <td>
    <strong>";
        // line 5
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
    ";
        // line 6
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 7
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("禁"), "html", null, true);
            echo "</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            $context["userRole"] = $this->env->getExtension('topxia_data_twig')->getData("Role", array("code" => $context["role"]));
            // line 14
            echo "        ";
            if (((array_key_exists("userRole", $context)) ? (_twig_default_filter((isset($context["userRole"]) ? $context["userRole"] : null), false)) : (false))) {
                // line 15
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userRole"]) ? $context["userRole"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userRole"]) ? $context["userRole"] : null), "name", array()), "")) : ("")), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "          ";
                echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $context["role"]);
                echo "
        ";
            }
            // line 19
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </span>
  </td>
 ";
        // line 22
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 22)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "orgCode", array()))));
        // line 23
        echo "  <td>
    ";
        // line 24
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) {
            // line 25
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已绑定"), "html", null, true);
            echo ")</span>
    ";
        } elseif ($this->getAttribute(        // line 26
(isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未绑定"), "html", null, true);
            echo ")</span>
    ";
        } else {
            // line 29
            echo "       -- 
    ";
        }
        // line 31
        echo "  </td>

  <td>
    ";
        // line 34
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 35
        echo "    ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 38
            echo "      --
    ";
        }
        // line 40
        echo "    
    <br>
    ";
        // line 42
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "emailVerified", array())) {
            // line 43
            echo "      <label class=\"label label-success\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("该Email地址已验证"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("已验证"), "html", null, true);
            echo "</label>
    ";
        }
        // line 45
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 58
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()) == 0)) {
            // line 59
            echo "       --
      ";
        } else {
            // line 61
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 63
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      ";
        // line 73
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 73)->display(array_merge($context, array("parentCode" => "admin_user_manage", "group" => "groupButton", "user" => (isset($context["user"]) ? $context["user"] : null))));
        // line 74
        echo "    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 74,  203 => 73,  199 => 72,  191 => 67,  185 => 66,  180 => 63,  174 => 61,  170 => 59,  168 => 58,  159 => 52,  153 => 51,  147 => 48,  142 => 45,  134 => 43,  132 => 42,  128 => 40,  124 => 38,  118 => 36,  115 => 35,  113 => 34,  108 => 31,  104 => 29,  96 => 27,  94 => 26,  87 => 25,  85 => 24,  82 => 23,  80 => 22,  76 => 20,  70 => 19,  64 => 17,  58 => 15,  55 => 14,  52 => 13,  48 => 12,  43 => 9,  37 => 7,  35 => 6,  31 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
