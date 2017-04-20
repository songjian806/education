<?php

/* TopxiaWebBundle:Group:index.html.twig */
class __TwigTemplate_809fb34e7b63eab79864d1c74989300242a4819651a58b3f69de06698b3a2732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("小组"), "html", null, true);
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <ol class=\"breadcrumb breadcrumb-o\" style=\"margin-top:-18px\">
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homepage"]) ? $context["homepage"] : null), "name", array()), $this->env->getExtension('translator')->trans("首页"))) : ($this->env->getExtension('translator')->trans("首页"))), "html", null, true);
        echo "</a></li>
    <li class=\"active\"><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "name", array()), $this->env->getExtension('translator')->trans("小组主页"))) : ($this->env->getExtension('translator')->trans("小组主页"))), "html", null, true);
        echo "</a></li>
  </ol>
  <div class=\"row\">
    <div class=\"col-md-9\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("热门小组"), "html", null, true);
        echo "</h3>
          <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
        </div>
        <div class=\"panel-body\">
          <div class=\"row media-group-list\">
            ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeGroup"]) ? $context["activeGroup"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 18
            echo "              <div class=\"media media-group col-md-4 col-sm-4\">
                <div class=\"media-left\">
                  <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["group"], "logo", array()), "group.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\" class=\"avatar-square-md\">
                  </a>
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    <a class=\"gray-darker\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", array()), "html", null, true);
            echo "\">
                      ";
            // line 27
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["group"], "title", array()), 9);
            echo "
                    </a>
                  </div>
                  <div class=\"metas\">
                    <span><i class=\"es-icon es-icon-people\"></i>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", array()), "html", null, true);
            echo "</span>
                    <span><i class=\"es-icon es-icon-textsms\"></i>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", array()), "html", null, true);
            echo "</span>
                  </div>
                </div>
              </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "              <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无小组信息！"), "html", null, true);
            echo "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "          </div>
        </div>
      </div>
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("最近话题"), "html", null, true);
        echo "</h3></div>
        <div class=\"panel-body\">
          ";
        // line 45
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:index.html.twig", 45)->display(array_merge($context, array("threads" =>         // line 46
(isset($context["recentlyThread"]) ? $context["recentlyThread"] : null), "groups" =>         // line 47
(isset($context["groupinfo"]) ? $context["groupinfo"] : null), "users" =>         // line 48
(isset($context["owners"]) ? $context["owners"] : null))));
        // line 50
        echo "        </div>
      </div>
    </div>
    ";
        // line 53
        $this->loadTemplate("TopxiaWebBundle:Group:sidebar.html.twig", "TopxiaWebBundle:Group:index.html.twig", 53)->display($context);
        // line 54
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 54,  153 => 53,  148 => 50,  146 => 48,  145 => 47,  144 => 46,  143 => 45,  138 => 43,  132 => 39,  123 => 37,  113 => 32,  109 => 31,  102 => 27,  96 => 26,  86 => 21,  80 => 20,  76 => 18,  71 => 17,  64 => 13,  60 => 12,  49 => 6,  43 => 5,  40 => 4,  37 => 3,  29 => 2,  11 => 1,);
    }
}
