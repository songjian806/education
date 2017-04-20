<?php

/* TopxiaAdminBundle:Theme:index.html.twig */
class __TwigTemplate_45af2f16803fcd27f62108e4b352d1f527e643389d8ef4833b10fa2108b6711f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Theme:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "setting/theme";
        // line 5
        $context["menu"] = "admin_setting_theme";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("名称"), "html", null, true);
        echo "</th>
      <th width=\"10%\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("主题版本"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("作者"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 20
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("themes/" . $this->getAttribute($context["theme"], "uri", array())) . "/") . $this->getAttribute($context["theme"], "thumb", array()))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</h5>
                ";
            // line 27
            echo (($this->getAttribute($context["theme"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "description", array()), "")) : (""));
            echo "
                ";
            // line 28
            if ((($this->getAttribute($context["theme"], "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "setting", array()), null)) : (null))) {
                // line 29
                echo "                  <a href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "setting", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
                echo "</a>
                ";
            }
            // line 31
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "author", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 37
            if (($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "uri", array()) == $this->getAttribute($context["theme"], "uri", array()))) {
                // line 38
                echo "              <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前正在使用该主题"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 40
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("使用"), "html", null, true);
                echo "</button>
            ";
            }
            // line 42
            echo "            ";
            if ((($this->getAttribute($context["theme"], "uri", array()) == "jianmo") && ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "uri", array()) == "jianmo"))) {
                // line 43
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\"class=\"btn btn-primary\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
                echo "</a>
            ";
            }
            // line 45
            echo "            ";
            if (((($this->getAttribute($context["theme"], "uri", array()) == "graceful") && ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "uri", array()) == "graceful")) && $this->env->getExtension('topxia_web_twig')->versionCompare($this->getAttribute($context["theme"], "version", array()), "1.4.14", ">="))) {
                // line 46
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\"class=\"btn btn-primary\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("管理"), "html", null, true);
                echo "</a>
            ";
            }
            // line 48
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
  </table>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  146 => 48,  138 => 46,  135 => 45,  127 => 43,  124 => 42,  116 => 40,  110 => 38,  108 => 37,  103 => 35,  99 => 34,  94 => 31,  86 => 29,  84 => 28,  80 => 27,  76 => 26,  71 => 24,  65 => 20,  61 => 19,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
