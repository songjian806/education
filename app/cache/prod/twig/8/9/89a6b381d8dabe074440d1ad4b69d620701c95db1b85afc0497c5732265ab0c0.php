<?php

/* TopxiaAdminBundle:Content:content-tr.html.twig */
class __TwigTemplate_89a6b381d8dabe074440d1ad4b69d620701c95db1b85afc0497c5732265ab0c0 extends Twig_Template
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
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:Content:content-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"content-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()), "html", null, true);
        echo "\">
\t<td>
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "title", array()), "html", null, true);
        echo "</a><br />
\t\t";
        // line 5
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array()) == "page")) {
            // line 6
            echo "\t\t  <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("地址："), "html", null, true);
            echo "page/";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 8
        echo "\t\t";
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 9
            echo "\t\t\t<span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("分类："), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 11
        echo "\t</td>
\t";
        // line 12
        $context["content_uri"] = $this->env->getExtension('routing')->getUrl((("content_" . $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array())) . "_show"), array("alias" => (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "alias", array()), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))) : ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array())))));
        // line 13
        echo "\t<td><a href=\"";
        echo twig_escape_filter($this->env, (isset($context["content_uri"]) ? $context["content_uri"] : null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, (isset($context["content_uri"]) ? $context["content_uri"] : null), "html", null, true);
        echo "</a></td>
\t<td>";
        // line 14
        echo $this->env->getExtension('topxia_web_twig')->getDictText("contentType", $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "type", array()));
        echo "</td>
\t<td>";
        // line 15
        echo $context["dict_macro"]->getcontentStatus($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()));
        echo "</td>
\t<td>
\t\t";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "<br />
\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
\t</td>
\t<td>
\t\t<div class=\"btn-group\">
\t\t  <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_edit", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
        echo "</a>
\t\t  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
\t\t    <span class=\"caret\"></span>
\t\t  </a>
\t\t  <ul class=\"dropdown-menu\">
\t\t  \t";
        // line 27
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "published")) {
            // line 28
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"publish-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_publish", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("发布"), "html", null, true);
            echo "</a></li>
\t\t    ";
        }
        // line 30
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) != "trash")) {
            // line 31
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"trash-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_trash", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("移至回收站"), "html", null, true);
            echo "</a></li>
\t\t    ";
        }
        // line 33
        echo "\t\t    ";
        if (($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "status", array()) == "trash")) {
            // line 34
            echo "\t\t\t    <li><a href=\"javascript:\" data-role=\"delete-item\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_content_delete", array("id" => $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("永久删除"), "html", null, true);
            echo "</a></li>
\t\t\t  ";
        }
        // line 36
        echo "\t\t  </ul>
\t\t</div>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Content:content-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  119 => 34,  116 => 33,  108 => 31,  105 => 30,  97 => 28,  95 => 27,  85 => 22,  78 => 18,  74 => 17,  69 => 15,  65 => 14,  58 => 13,  56 => 12,  53 => 11,  46 => 9,  43 => 8,  35 => 6,  33 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
