<?php

/* TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig */
class __TwigTemplate_780d942334902b890b17338f60a14c6c6c2447ed26f27823c5f7edea6d73474a extends Twig_Template
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
        echo "<li class=\"list-group-item clearfix  ";
        if (($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) != "footer-link")) {
            echo "theme-edit-item";
        }
        echo "\" data-code=\"theme_edit_item_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"col-md-4 \">
    ";
        // line 3
        if (($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) != "footer-link")) {
            echo "<span class=\"glyphicon glyphicon-move edit-sort\"></span>";
        } else {
            echo "<span class=\"glyphicon glyphicon-lock  edit-sort\"></span>";
        }
        // line 4
        echo "    <label>
      <input type=\"checkbox\" class=\"check-block\" ";
        // line 5
        if (((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
            echo "checked";
        }
        echo "><span class=\"default-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "defaultTitle", array()), "html", null, true);
        echo "</span>
    </label>
  </div>
  <div class=\"col-md-4\">
    &nbsp;";
        // line 9
        if ((($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "defaultTitle", array()), "html", null, true);
        }
        // line 10
        echo "  </div>
  <div class=\"col-md-4 text-right\">
    ";
        // line 12
        if (!twig_in_filter($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()), array(0 => "login-box"))) {
            // line 13
            echo "      
      ";
            // line 14
            if ((($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) == "middle-banner") || ($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) == "footer-link"))) {
                // line 15
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block", array("category" => _twig_default_filter("theme", "all"))), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" ";
                if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
                    echo "style=\"display:none;\"";
                }
                echo "><span class=\"glyphicon glyphicon-wrench\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
                echo "</a>
      ";
            } elseif (($this->getAttribute(            // line 16
(isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) == "advertisement-banner")) {
                // line 17
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block", array("category" => _twig_default_filter("theme", "all"))), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" ";
                if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
                    echo "style=\"display:none;\"";
                }
                echo "><span class=\"glyphicon glyphicon-wrench\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
                echo "</a>
      ";
            } elseif (($this->getAttribute(            // line 18
(isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) == "friend-link")) {
                // line 19
                echo "        <a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_navigation", array("type" => "friendlyLink"));
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\"><span class=\"glyphicon glyphicon-wrench\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
                echo "</a>
      ";
            } else {
                // line 21
                echo "        <button class=\"btn btn-primary btn-sm item-edit-btn\" ";
                if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
                    echo "style=\"display:none;\"";
                }
                echo " data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_themes_config_edit", array("uri" => ((array_key_exists("uri", $context)) ? (_twig_default_filter((isset($context["uri"]) ? $context["uri"] : null), null)) : (null)), "config" => (isset($context["pendant"]) ? $context["pendant"] : null))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("编辑"), "html", null, true);
                echo "</button>
      ";
            }
            // line 23
            echo "    ";
        }
        // line 24
        echo "  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 24,  114 => 23,  102 => 21,  94 => 19,  92 => 18,  81 => 17,  79 => 16,  68 => 15,  66 => 14,  63 => 13,  61 => 12,  57 => 10,  51 => 9,  40 => 5,  37 => 4,  31 => 3,  19 => 1,);
    }
}
