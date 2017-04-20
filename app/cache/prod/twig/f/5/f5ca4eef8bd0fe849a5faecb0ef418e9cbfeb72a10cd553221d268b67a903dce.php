<?php

/* TopxiaAdminBundle:Article:article-tr.html.twig */
class __TwigTemplate_f5ca4eef8bd0fe849a5faecb0ef418e9cbfeb72a10cd553221d268b67a903dce extends Twig_Template
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
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:Article:article-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"article-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\">
  <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <span class=\"text-muted\">
      <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), 0, 22), "html", null, true);
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array())) > 22)) {
            echo "...";
        }
        echo "</a>
    </span>
  </td>
  ";
        // line 9
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Article:article-tr.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "orgCode", array()))));
        // line 10
        echo "  <td>
    ";
        // line 11
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 12
            echo "      <span class=\"text-muted\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_category", array("categoryCode" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</a></span>
    ";
        } else {
            // line 14
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("未分类"), "html", null, true);
            echo "</span>
    ";
        }
        // line 16
        echo "  </td>
  <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <a href=\"javascript:;\" class=\"featured-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置为头条"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "featured")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "featured")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 23
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "featured", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("头"), "html", null, true);
        echo "</span></a>
    <a href=\"javascript:;\" class=\"promoted-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("推荐该资讯"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "promoted")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "promoted")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 28
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "promoted", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("荐"), "html", null, true);
        echo "</span></a>

    <a href=\"javascript:;\" class=\"sticky-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("置顶该资讯"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "sticky")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "property" => "sticky")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 34
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "sticky", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("顶"), "html", null, true);
        echo "</span></a>

  </td>

  <td>";
        // line 38
        echo $context["dict_macro"]->getarticleStatus($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()));
        echo "</td>

  <td>
    <div class=\"btn-group\">
      <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
        // line 47
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) != "published")) {
            // line 48
            echo "          <li><a href=\"javascript:\" data-role=\"publish-item\"
                 data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_publish", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 51
        echo "        ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) == "published")) {
            // line 52
            echo "          <li><a href=\"javascript:\" data-role=\"unpublish-item\"
                 data-url=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_unpublish", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("取消发布"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 55
        echo "        ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) != "trash")) {
            // line 56
            echo "          <li><a href=\"javascript:\" data-role=\"trash-item\"
                 data-url=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_trash", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移至回收站"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 59
        echo "        ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "status", array()) == "trash")) {
            // line 60
            echo "          <li><a href=\"javascript:\" data-role=\"delete-item\"
                 data-url=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("永久删除"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 63
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 63,  208 => 61,  205 => 60,  202 => 59,  195 => 57,  192 => 56,  189 => 55,  182 => 53,  179 => 52,  176 => 51,  169 => 49,  166 => 48,  164 => 47,  154 => 42,  147 => 38,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  69 => 17,  66 => 16,  60 => 14,  52 => 12,  50 => 11,  47 => 10,  45 => 9,  34 => 6,  26 => 3,  21 => 2,  19 => 1,);
    }
}
